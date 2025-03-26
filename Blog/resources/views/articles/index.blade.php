<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des articles</title>
</head>
<body>
    <h1>Articles</h1>
    @if($articles->count())
        @foreach($articles as $article)
            <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h2>
        @endforeach
    @else
        <p>Aucun article trouvé.</p>
    @endif
</body>
</html>
