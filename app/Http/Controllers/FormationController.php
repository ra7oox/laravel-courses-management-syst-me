<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Classe;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->search) {
            $formations = Formation::where('titre', 'like', '%' . $request->search . '%')->get();
        } else {
            $formations = Formation::all();
        }
    
        return view("formations.formations", compact("formations"));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("formations.formation_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "titre"=>"required|min:6",
            "NbreHeure"=>"required",
        ]);
        Formation::create($request->all());
        return redirect()->route('formations.index')->with("success","la formation ajouté par success");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $formation=Formation::findOrFail($id);
        $avis=$formation->avis;
        return view("formations.formation_detail",compact("avis"));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $formation=Formation::findOrFail($id);
        $class=Classe::where("id_formation",$formation->id);
        $formation->delete();
        $class->delete();
        return redirect()->route('formations.index')->with("success","la formation supprimé par success");

    }
}
