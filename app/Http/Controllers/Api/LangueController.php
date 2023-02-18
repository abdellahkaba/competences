<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Langue;
use Illuminate\Http\Request;

class LangueController extends Controller
{
    //
    public function get_all_langue()
    {
        $langues = Langue::orderBy('id','DESC')->get();

        return response()->json([
            'langues' => $langues
        ],200);
    }

    public function add_langue(Request $request)
    {
        $this->validate($request,[
            'langue' => 'required'
        ]);

        $langue = new Langue() ;
        $langue->langue = $request->langue;
        $langue->niveau_ecriture = $request->niveau_ecriture;
        $langue->niveau_lecture = $request->niveau_lecture;
        $langue->niveau_comprehension = $request->niveau_comprehension;
        $langue->user_id = $request->user_id;
        $langue->save();
    }

    public function edit_langue($id)
    {
        $langue = Langue::find($id);
        return response()->json([
            'langue' => $langue
        ],200) ;
    }

    public function update_langue(Request $request, $id)
    {
        $langue = Langue::find($id);
        $this->validate($request,[
            'langue' => 'required'
        ]);

     
        $langue->langue = $request->langue;
        $langue->niveau_ecriture = $request->niveau_ecriture;
        $langue->niveau_lecture = $request->niveau_lecture;
        $langue->niveau_comprehension = $request->niveau_comprehension;
        $langue->user_id = $request->user_id;
        $langue->save();
    }

    //function de suppression

    public function delete_langue($id)
    {
        $langue = Langue::findOrFail($id);
        $langue->delete();
        return response()->json([
            'langue' => $langue
        ]);
    }
}
