<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Coordonnee;
use Illuminate\Http\Request;

class CoordonneeController extends Controller
{

    public function get_all_coordonnee()
    {
        $coordonnees = Coordonnee::orderBy('id','DESC')->get();

        return response()->json([
            'coordonnees' => $coordonnees
        ]);
    }

    public function add_coordonnee(Request $request)
    {
        $this->validate($request,[
            'phone_bureau' => 'required'
        ]);


        $coordonnee = new Coordonnee();

        $coordonnee->phone_bureau = $request->phone_bureau;
        $coordonnee->phone_domicile = $request->phone_domicile;
        $coordonnee->fax = $request->fax;
        $coordonnee->adresse_postal = $request->adresse_postal;
        $coordonnee->adresse_geographique = $request->adresse_geographique;
        $coordonnee->user_id = $request->user_id ;
        $coordonnee->save();
    }

    public function edit_coordonnee($id)
    {
        $coordonnee = Coordonnee::find($id);

        return response()->json([
            'coordonnee' => $coordonnee
        ]);
    }

    public function update_coordonnee(Request $request, $id)
    {
        $coordonnee = Coordonnee::find($id);

        $this->validate($request,[
            'phone_bureau' => 'required'
        ]);

        $coordonnee->phone_bureau = $request->phone_bureau;
        $coordonnee->phone_domicile = $request->phone_domicile;
        $coordonnee->fax = $request->fax;
        $coordonnee->adresse_postal = $request->adresse_postal;
        $coordonnee->adresse_geographique = $request->adresse_geographique;
        $coordonnee->user_id = $request->user_id ;
        $coordonnee->save();
    }

    public function delete_coordonnee($id)
    {
        $coordonnee = Coordonnee::findOrFail($id);
        $coordonnee->delete();
        return response()->json([
            'coordonnee' => $coordonnee
        ]);
    }
}
