<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request) {
        User::create($request->all());
        return redirect("/habitants");
    }

    public function login(Request $request) {
        if (Auth::attempt(["login" => $request->login, "password" => $request->password])) {
            return redirect("/habitants");
        }
        else {
            return back()->withErrors(["message" => "Le login ou le mot de passe est incorrete!!!"]);
        }
    }
}
