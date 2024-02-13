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
Route::get('client/trash/{id}', [ClientController::class, 'trash'])->name('client.trash');
Route::get('client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::post('client/update/{id}', [ClientController::class, 'update'])->name('client.update');
Route::get('client/delete', [ClientController::class, 'delete']);
Route::get('client/restore/{id}', [ClientController::class, 'restore']);
Route::get('client/forceDelete/{id}', [ClientController::class, 'force_delete']);