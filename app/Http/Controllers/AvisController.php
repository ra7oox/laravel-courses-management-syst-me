<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avis=Avis::all();
        return view("avis.avis",compact("avis"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etudiants=Etudiant::all();
        $formations=Formation::all();
        return view("avis.avis_create",compact("etudiants","formations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_E"=>"required",
            "id_F"=>"required",
            "points"=>"required",
        ]);
        Avis::create($request->all());
        return redirect()->route("avis.index")->with("success","avis ajouté par success");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $avis=Avis::findOrFail($id);
        $etudiant=$avis->etudiant;
        $formation=$avis->formation;

        return view("formations.formation_etudiant_avis",compact("avis","etudiant","formation"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avis $avis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avis $avis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avis $avis)
    {
        //
    }
}
