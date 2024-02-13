<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('client/register', [ClientController::class, 'index']);
Route::post('client/register', [ClientController::class, 'store']);
Route::get('client/view', [ClientController::class, 'view']);