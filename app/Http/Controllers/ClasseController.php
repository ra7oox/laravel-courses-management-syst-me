<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=Classe::all();

        return view("classes.classes",[
            'classes'=>$classes,
          
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formations=Formation::all();
        return view("classes.classe_create",compact("formations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "libelle"=>"required",
            "id_formation"=>"required",
            "nombre_max"=>"required",
        ]);
        Classe::create([
            "libelle"=>$request->libelle,
            "id_formation"=>$request->id_formation,
            "nombre_max"=>$request->nombre_max,
        ]);
        return redirect()->route('classes.index')->with("success","classe à bien ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)

    {
        $classe=Classe::findOrFail($id);

        $formation=$classe->formation;
        return view("formations.formation_classe",[
            'classe'=>$classe,
            'formation'=>$formation,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classe $classe)
    {
        //
    }
}
