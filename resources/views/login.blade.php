<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Articles</title>
</head>
<body>
    <h2>Page de connexion</h2>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <br>
        @error('email')<span style="color:red">{{ $message }}</span><br>@enderror
        <input type="password" name="password" placeholder="mot de passe"><br>
        @error('password')<span style="color:red">{{ $message }}</span><br>@enderror

        <button type="submit">Se connecter </button>
    </form>
</body>
</html>
