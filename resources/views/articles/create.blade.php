<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Article</title>
    <style>
        body  { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; padding: 0 20px; }
        h1    { color: #e74c3c; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input[type="text"], textarea {
            width: 100%; padding: 10px; margin-top: 5px;
            border: 1px solid #ddd; border-radius: 5px;
            box-sizing: border-box; font-size: 14px;
        }
        textarea { height: 150px; resize: vertical; }
        .btn  { display: inline-block; padding: 10px 25px; background: #e74c3c;
                color: white; border: none; border-radius: 5px; cursor: pointer;
                font-size: 16px; margin-top: 15px; }
        .btn:hover { background: #c0392b; }
        .error { color: red; font-size: 13px; margin-top: 4px; }
        a     { color: #3498db; }
    </style>
</head>
<body>

    <h1>➕ Ajouter un Article</h1>

    {{-- Affichage des erreurs de validation --}}
    @if($errors->any())
        <ul style="background:#fdecea; padding:10px 20px; border-radius:5px; color:#c0392b;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/articles/store" method="POST">
        @csrf

        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Titre de l'article">
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="content">Contenu</label>
        <textarea id="content" name="content" placeholder="Contenu de l'article...">{{ old('content') }}</textarea>
        @error('content')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn">💾 Enregistrer</button>
    </form>

    <br>
    <a href="/articles">← Retour à la liste</a>

</body>
</html>
