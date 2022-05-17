<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{

    function store(Request $request)
    {

        $validador = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:8',
            'device_name' => 'required',
            'pix' => 'max:255',
            'github' => 'max:255',
            'nickname' => 'max:255'
        ]);

        if($validador->fails()) {
            return response()->json([
                'error' => 'Credenciais invalidas',
            ],404);
         } else {

            $request->validate([
                'email' => 'required|email|unique:users',
                'name' => 'required|max:255',
                'password' => 'required|min:8',
                'device_name' => 'required',
                'pix' => 'max:255',
                'github' => 'max:255',
                'nickname' => 'max:255'

            ]);

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'pix' => $request['pix'],
                'github' => $request['github'],
                'nickname' => $request['nickname']
            ], 404);

            return response()->json([
                'token' => $user->createToken($request->device_name)->plainTextToken
            ]);

        }
    }

    function logar(Request $request)
    {


        $validador = Validator::make($request->all(),[
                'email' => 'required|email',
                'password' => 'required'
        ]);

        if($validador->fails()) {
            return response()->json([
                'error' => 'Credenciais invalidas',
            ], 404);
         } else {

            $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'error' => 'Credencias invalidas'
                ], 404);
            }

            return response()->json([
                'token' => $user->createToken($request->device_name)->plainTextToken
            ]);
        }
    }

}
