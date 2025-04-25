<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants=Etudiant::all();
        return view("etudiants.etudiants",compact("etudiants"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes=Classe::all();
        return view("etudiants.etudiant_create",compact("classes"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>'required',
            "prenom"=>'required',
            "adress"=>'required|min:6',
            "date_naissance"=>'required',
            "id_class"=>'required',
        ]);
        Etudiant::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "adress"=>$request->adress,
            "date_naissance"=>$request->date_naissance,
            "id_class"=>$request->id_class,
        ]);
        return redirect()->route('etudiants.index')->with("success","l'etudiant à bien ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $etudiant=Etudiant::findOrFail($id);
        $classe=$etudiant->classe;
        return view("classes.classe_etudiant",compact("etudiant","classe"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
