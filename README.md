# Lab-resolution-des-exceptions



Etape 1 : Reproduction de l’erreur



## creation d'un projet Blog simple avec un erreur  : 

13. The GET method is not supported for this route

## message Error : 
 - The GET method is not supported for route articles. Supported methods: POST.

## Probleme :
    <form action="{{ route('articles.store') }}" method="GET">
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

## Solution :
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
    
Etape 3 : Résolution avec la Stratégie Affichée

8. View [xxx] not found.

## Probleme : 

- Laravel ne trouve pas la vue edit.blade.php.

## Solution :

- creation de la vue edit.blade.php dans le dossier resources/views/items