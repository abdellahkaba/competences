<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function get_all_experience()
    {
        $experiences = Experience::orderBy('id','DESC')->get();

        return response()->json([
            'experiences' => $experiences
        ],200);
    }

    public function add_experience(Request $request)
    {
        $this->validate($request,[
            'fonction' => 'required'
        ]);

        $experience = new Experience() ;
        $experience->fonction = $request->fonction ;
        $experience->entreprise = $request->entreprise;
        $experience->date_debut = $request->date_debut;
        $experience->date_fin = $request->date_fin;
        $experience->pays = $request->pays;
        $experience->statut = $request->statut;
        $experience->categorie = $request->categorie;
        $experience->competence = $request->competence;
        $experience->user_id = $request->user_id;
        $experience->save();

    }

    //fonction d'edition
    public function edit_experience($id)
    {
        $experience = Experience::find($id);
        return response()->json([
            'experience' => $experience
        ],200);
    }

    //fonction de modification

    public function update_experience(Request $request, $id)
    {
        $experience = Experience::find($id);
        $this->validate($request,[

        ]);

        $experience->fonction = $request->fonction ;
        $experience->entreprise = $request->entreprise;
        $experience->date_debut = $request->date_debut;
        $experience->date_fin = $request->date_fin;
        $experience->pays = $request->pays;
        $experience->statut = $request->statut;
        $experience->categorie = $request->categorie;
        $experience->competence = $request->competence;
        $experience->user_id = $request->user_id;
        $experience->save();

    }

    //fonction de suppression

    public function delete_experience($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return response()->json([
            'experience' => $experience
        ]);
    }
}
