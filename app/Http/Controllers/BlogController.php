<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Simulated article data (no database needed)
    private function getArticles()
    {
        return [
            ['id' => 1, 'title' => 'Introduction à Laravel', 'content' => 'Laravel est un framework PHP élégant et puissant.'],
            ['id' => 2, 'title' => 'Les Contrôleurs Laravel', 'content' => 'Les contrôleurs permettent d\'organiser la logique de l\'application.'],
            ['id' => 3, 'title' => 'Les Routes Laravel',     'content' => 'Les routes définissent les URLs accessibles dans l\'application.'],
        ];
    }

    // ✅ Afficher la liste des articles
    public function index()
    {
        $articles = $this->getArticles();
        return view('articles.index', compact('articles'));
    }

    // ✅ Afficher les détails d'un article
    public function show($id)
    {
        $articles = $this->getArticles();

        // Recherche de l'article par son id
        $article = collect($articles)->firstWhere('id', (int)$id);

        if (!$article) {
            abort(404, 'Article introuvable.');
        }

        return view('articles.show', compact('article'));
    }

    // ✅ Afficher le formulaire d'ajout
    public function create()
    {
        return view('articles.create');
    }

    // ✅ Enregistrer un nouvel article et rediriger
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'title'   => 'required|min:3|max:255',
            'content' => 'required|min:10',
        ]);
 
        // Ici on simule l'enregistrement (pas de BDD)
        // En réel : Article::create($request->all());

        // Redirection vers la liste avec un message de succès
        return redirect('/articles')->with('success', 'Article ajouté avec succès !');
    }
}
