<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{
    public function getAllUser(){
        return response()->json([
            "users" => User::all(),
        ]);
    }

    public function getUser($id){
        return response()->json([
            "user" => User::find($id),
        ]);
    }

    public function authLogin(Request $request){
        Auth::attempt();
    }
}
