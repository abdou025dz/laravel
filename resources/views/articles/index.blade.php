<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Articles</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        h1   { color: #e74c3c; }
        .article-card { border: 1px solid #ddd; border-radius: 8px; padding: 15px; margin: 10px 0; }
        a    { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .btn { display: inline-block; padding: 10px 20px; background: #e74c3c; color: white;
               border-radius: 5px; margin-top: 15px; }
        .success { background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; }
    </style>
</head>
<body>

    <h1>📰 Liste des Articles</h1>

    {{-- Message de succès après ajout --}}
    @if(session('success'))
        <div class="success">✅ {{ session('success') }}</div>
    @endif

    {{-- Liste des articles --}}
    @forelse($articles as $article)
        <div class="article-card">
            <h2>{{ $article['title'] }}</h2>
           <p>{{ substr($article['content'], 0, 80) }}...</p>
            <a href="/articles/{{ $article['id'] }}">Lire la suite →</a>
        </div>
    @empty
        <p>Aucun article disponible.</p>
    @endforelse

    <a href="/articles/create" class="btn">➕ Ajouter un article</a>

</body>
</html>
