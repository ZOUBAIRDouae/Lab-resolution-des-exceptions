<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    // Affiche la liste de tous les articles
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    // Affiche un article en particulier
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    // Affiche le formulaire de création d'un nouvel article
    public function create()
    {
        return view('articles.create');
    }

    // Stocke un nouvel article en base de données
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('articles.index')->with('success', 'Article créé avec succès !');
    }
    

    // Affiche le formulaire d'édition d'un article existant
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    // Met à jour un article existant
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        // Validation des données
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Mise à jour du slug si le titre a changé
        $validated['slug'] = Str::slug($validated['title']);

        // Mise à jour de l'article
        $article->update($validated);

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    // Supprime un article
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
