<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>

        <!-- Lien de retour vers la liste des articles -->
        <a href="{{ route('articles.index') }}">Retour à la liste des articles</a>
    </div>
</body>
</html>
