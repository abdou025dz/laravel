<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire d'inscription</title>
    <style>
        .error-text { color: red; font-size: 0.9em; margin-top: 5px; }
        .error-list { color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Inscription</h1>

    {{-- 1. Global Error Summary (Optional: remove if you only want errors under inputs) --}}
    @if ($errors->any())
        <div class="error-list">
            <strong>Veuillez corriger les erreurs suivantes :</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        {{-- Nom Field --}}
        <div>
            <label for="name">Nom :</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>
        <br>

        {{-- Username Field --}}
        <div>
            <label for="username">Nom d'utilisateur :</label><br>
            <input type="text" name="username" id="username" value="{{ old('username') }}">
            @error('username')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>
        <br>

        {{-- Email Field --}}
        <div>
            <label for="email">Email :</label><br>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>
        <br>

        {{-- Password Field --}}
        <div>
            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" id="password">
            @error('password') {{-- Fixed: Previously said 'email' --}}
                <div class="error-text">{{ $message }}</div>
            @enderror
        </div>
        <br>

        {{-- Password Confirmation Field --}}
        <div>
            <label for="password_confirmation">Confirmation du mot de passe :</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <br>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
