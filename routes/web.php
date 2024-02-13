<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () 
{
    return view('welcome');
});

Route::get('client/register', [ClientController::class, 'index']);
Route::post('client/register', [ClientController::class, 'store']);
