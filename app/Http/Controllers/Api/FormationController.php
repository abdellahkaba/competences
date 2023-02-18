<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function get_all_formation()
    {
        $formations = Formation::orderBy('id','DESC')->get();
        return response()->json([
            'formations' => $formations
        ],200);
    }

    public function add_formation(Request $request)
    {
        $this->validate($request,[
            'specialite' => 'required'
        ]);

        $formation = new Formation();
        $formation->specialite = $request->specialite;
        $formation->ecole = $request->ecole;
        $formation->niveau = $request->niveau;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->equivalence = $request->equivalence;
        $formation->pays = $request->pays;
        $formation->ville = $request->ville;
        $formation->user_id = $request->user_id;
        $formation->save();
    }

    //fonction d'edition
    public function edit_formation($id)
    {
        $formation = Formation::find($id);
        return response()->json([
            'formation' => $formation
        ],200);
    }

    public function update_formation(Request $request, $id)
    {
        $formation = Formation::find($id);


        $this->validate($request,[
            'specialite' => 'required'
        ]);
        $formation->specialite = $request->specialite;
        $formation->ecole = $request->ecole;
        $formation->niveau = $request->niveau;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->equivalence = $request->equivalence;
        $formation->pays = $request->pays;
        $formation->ville = $request->ville;
        $formation->user_id = $request->user_id;
        $formation->save();
    }


    //fonction de suppression

    public function delete_formation($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return response()->json([
            'formation' => $formation
        ]);
    }
}
