<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    //

    public function get_all_publication()
    {
        $publications = Publication::orderBy('id','DESC')->get();
        return response()->json([

            'publications' => $publications
        ],200);
    }

    public function add_publication(Request $request)
    {
        // $this->validate($request,[
        //     ''
        // ]);

        $publication = new Publication();

        $publication->type = $request->type;
        $publication->titre = $request->titre;
        $publication->annee = $request->annee;
        $publication->editeur = $request->editeur;
        $publication->user_id = $request->user_id;
        $publication->save();
    }


    public function edit_publication($id)
    {
        $publication = Publication::find($id);

        return response()->json([
            'publication' => $publication
        ],200);
    }

    public function update_publication(Request $request,$id)
    {
        $publication = Publication::find($id);

        $this->validate($request,[
            
        ]);
        $publication->type = $request->type;
        $publication->titre = $request->titre;
        $publication->annee = $request->annee;
        $publication->editeur = $request->editeur;
        $publication->user_id = $request->user_id;
        $publication->save();

    }

    //function de suppression

    public function delete_publication($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->delete();
        return response()->json([
            'publication' => $publication
        ]);
    }
}
