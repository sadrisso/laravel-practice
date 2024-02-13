<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        return view('client-form');
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
}
