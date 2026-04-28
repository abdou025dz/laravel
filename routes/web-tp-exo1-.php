<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Page d'accueil → redirige vers les articles
Route::get('/', function () {
    return redirect('/articles');
});

// ⚠️ /articles/create DOIT être AVANT /articles/{id}
// sinon Laravel confondrait "create" avec un {id}
Route::get('/articles',         [BlogController::class, 'index']);
Route::get('/articles/create',  [BlogController::class, 'create']);
Route::post('/articles/store',  [BlogController::class, 'store']);
Route::get('/articles/{id}',    [BlogController::class, 'show']);
