<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Submission</title>
</head>
<body>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre :</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Contenu :</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>