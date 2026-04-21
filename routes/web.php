<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route to display the form
Route::get('/register', function () {
    return view('register');
})->name('register.form');

// Route to handle the form submission
Route::post('/register', function (Request $request) {
    $validated = $request->validate([
        'name'     => 'required|min:3',

        // REMOVED 'unique:users,email' because you don't want to use a database
        'email'    => 'required_without:username|nullable|email',

        'username' => 'required_without:email|nullable',

        'password' => 'required|min:6|confirmed',
    ], [
        'name.required'             => 'Le nom est obligatoire.',
        'name.min'                  => 'Le nom doit contenir au moins :min caractères.',
        'email.required_without'    => 'L\'adresse email est obligatoire si le nom d\'utilisateur est vide.',
        'email.email'               => 'Le format de l\'adresse email est invalide.',
        'username.required_without' => 'Le nom d\'utilisateur est requis si l\'email est vide.',
        'password.required'         => 'Le mot de passe est obligatoire.',
        'password.min'              => 'Le mot de passe doit faire au moins :min caractères.',
        'password.confirmed'        => 'La confirmation du mot de passe ne correspond pas.',
    ]);

    // Success message without database
    return "Inscription réussie pour " . $request->input('name');
})->name('register');
