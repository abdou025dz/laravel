<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'john doe',   'email' => 'john.doe@example.com'],
            ['id' => 2, 'name' => 'john smith',  'email' => 'john.smith@example.com'],
            ['id' => 3, 'name' => 'oussama',     'email' => 'archimed@archimed.com'],
        ];

        return response()->json($users);
    }

    public function show($id)
    {
        $users = [
            1 => ['id' => 1, 'name' => 'john doe',   'email' => 'john.doe@example.com'],
            2 => ['id' => 2, 'name' => 'john smith',  'email' => 'john.smith@example.com'],
            3 => ['id' => 3, 'name' => 'oussama',     'email' => 'archimed@archimed.com'],
        ];

        if (!isset($users[$id])) {
            abort(404, 'User not found');
        }

        $user = $users[$id];

        return view('users.show', compact('user'));
    }
    public function create(){
        return view('users.create'); //affiche le formulaire de creation
    }

    public function store(request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        return view('users.confirmation', [
            'name' => $name,
            'email' => $email,
            'message' => 'Utilisateur creer avec succes'
        ]);
    }
}
