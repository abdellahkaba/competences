<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required',
            'situa_matrimoniale' => 'required',
            'nbr_enfant',
            'date_naiss' => 'required',
            'sexe' => 'required',
            'pays_naiss' => 'required',
            'ville_naiss' => 'required',
            'nationalite_origine' => 'required',
            'nationalite_actuelle' => 'required',
            'piece_identite' => 'required',
            'numero_piece_identite' => 'required',
            'date_debut_piece' => 'required',
            'date_fin_piece' => 'required',
            'centre_interet' => 'required',
            'cv',
            'photo'
        ]);

        if($validator->fails()){
            $response = [
                'succes' => false,
                'message' => $validator->error()
            ];

            return response()->json($response, 400);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [
            'success' => true,
            'data' => $success,
            'message' => 'Utilisateur enregistré avec succès ! '
        ];

        return response()->json($response,200);
    }

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=> $request->password])){
            // $user = Auth::user();
            $user = $request->user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;

            $response = [
            'success' => true,
            'data' => $success,
            'message' => 'Utilisateur enregistré avec succès ! '
            ];

            return response()->json($response,200);
        }
        // if (auth()->attempt(['email'=>$request->email,'password'=>$request->password])) {
        //     $user = users::where('email','=',$request->email)->first();
        //     return redirect('/messenger')->with('usersignin');
        //   }
    }
}
