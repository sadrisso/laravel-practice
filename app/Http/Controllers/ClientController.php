<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $url = url('client/register');
        $title = 'Client Registration';
        return view('client-form', compact('url', 'title'));
    }

    public function store(Request $req, Client $res)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $res->fill($req->all())->save();

        return redirect('client/view');
    }

    public function view()
    {
        $client = Client::all();
        return view('client-view', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        if(!is_null($client))
        {
            $url = url('client/update'). '/' . $id;
            $title = 'Update Client';
            return view('client-form', compact('url', 'title', 'client'));
        }
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $client = Client::find($id);
        $client->name = $req['name'];
        $client->email = $req['email'];
        $client->save();

        return redirect('client/view');
    }

    public function trash($id)
    {
        Client::find($id)->delete();
        return redirect()->back();
    }

    public function delete()
    {
        $client = Client::onlyTrashed()->get();
        return view('client-trash', compact('client'));
    }

    public function restore($id)
    {
        $client = Client::withTrashed()->find($id);
        if(!is_null($client))
        {
            $client->restore();
        }
        return redirect()->back();
    }

    public function force_delete($id)
    {
        $client = Client::onlyTrashed()->find($id);
        if(!is_null($client))
        {
            $client->forceDelete();
        }
        return redirect()->back();
    }
}
