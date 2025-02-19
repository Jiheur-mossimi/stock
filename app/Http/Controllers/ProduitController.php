<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::paginate(5);
        echo $produits;
        return view("produits.index", compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'reference' => 'required|max:10',
            'libelle' => 'required|max:100',
            'quantite' => 'required',
            'prix' => 'required',
            'categorie_id' => 'required'
        ]);

        $p = new Produit();
        $p->reference = $request->reference;
        $p->libelle = $request->libelle;
        $p->quantite = $request->quantite;
        $p->prix = $request->prix;
        $p->categorie_id = $request->categorie_id;
        $p->save();
        return redirect('produits')->with('message', "Le produit a bien été créé !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produit::find($id)->delete();
        return redirect('produits')->with('message', "Le produit a bien été supprimé !");
    }
}
