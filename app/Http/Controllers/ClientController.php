<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client-form');
    }

    public function store(Request $req)
    {
        
    }
}
