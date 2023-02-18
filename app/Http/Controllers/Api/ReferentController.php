<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Referent;
use Illuminate\Http\Request;

class ReferentController extends Controller
{
    //

    public function get_all_referent()
    {
        $referents = Referent::orderBy('id','DESC')->get();

        return response()->json([
            'referents' => $referents
        ],200);
    }

    public function add_referent(Request $request)
    {
        $this->validate($request,[
            'nom_complet' => 'required'
        ]);

        $referent = new Referent();

        $referent->nom_complet = $request->nom_complet;
        $referent->phone_fixe = $request->phone_fixe;
        $referent->phone_mobile = $request->phone_mobile;
        $referent->adresse_email = $request->adresse_email;
        $referent->user_id = $request->user_id;
        $referent->save();
    }

    public function edit_referent($id)
    {
        $referent = Referent::find($id);
        return response()->json([
            'referent' => $referent
        ],200);
    }

    public function update_referent(Request $request, $id)
    {
        $referent = Referent::find($id);

        $this->validate($request,[
            'nom_complet' => 'required'
        ]);

        

        $referent->nom_complet = $request->nom_complet;
        $referent->phone_fixe = $request->phone_fixe;
        $referent->phone_mobile = $request->phone_mobile;
        $referent->adresse_email = $request->adresse_email;
        $referent->user_id = $request->user_id;
        $referent->save();
    }

    //function de suppression

    public function delete_referent($id)
    {
        $referent = Referent::findOrFail($id);
        $referent->delete();
        return response()->json([
            'referent' => $referent
        ]);
    }
}
