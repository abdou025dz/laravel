<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/index', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

//Route pour afficher le formulaire de creation d'utilisateur

Route::get('/create', [UserController::class, 'create']);

//Route pour traiter le formulaire de creation d'utilisateur

Route::post('/users', [UserController::class, 'store']);

