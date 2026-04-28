<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        h1   { color: #e74c3c; }
        .content { background: #f8f9fa; padding: 20px; border-radius: 8px; line-height: 1.6; }
        a    { color: #3498db; }
    </style>
</head>
<body>

    <h1>📄 {{ $article['title'] }}</h1>

    <div class="content">
        <p>{{ $article['content'] }}</p>
    </div>

    <br>
    <a href="/articles">← Retour à la liste</a>

</body>
</html>
