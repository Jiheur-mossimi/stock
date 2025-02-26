<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::paginate(7);
        return view("categories.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|max:10',
            'titre' => 'required|max:100',
        ]);

        $categorie = new Categorie();
        $categorie->code = $request->code;
        $categorie->titre = $request->titre;
        $categorie->save();

        //return back()->with('message', "La catégorie a bien été créée !");
        return redirect('categories')->with('message', "La catégorie a bien été créée !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = Categorie::find($id);
        return view('categories.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorie = Categorie::find($id);
        return view('categories.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'code' => 'required|max:10',
            'titre' => 'required|max:100',
        ]);
        $categorie = Categorie::find($id);

        $categorie->code = $request->code;
        $categorie->titre = $request->titre;
        $categorie->save();

        return redirect('categories')->with('message', "La catégorie a bien été modifié !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categorie::find($id)->delete();
        return redirect('categories')->with('message', "La catégorie $id a bien été supprimée !");
    }
}
