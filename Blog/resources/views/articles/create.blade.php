<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre :</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="content">Contenu :</label>
            <textarea name="content" id="content"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
    
</body>
</html>