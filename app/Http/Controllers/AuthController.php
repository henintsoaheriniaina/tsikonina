<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {

        $validated = $request->validated();
        // dd($validated);
        $token =  $request->has("remember_token");
        $user = User::create($validated);
        Auth::login($user, $token);
        return redirect()->intended(route("index"));
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            "email" => "email|required",
            "password" => "required",
        ]);
        $token =  $request->has("remember_token");
        if (Auth::attempt($validated, $token)) {
            return redirect()->intended(route("index"));
        }
        return back()->withErrors(['email' => "Identifiants incorrects"]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("login");
    }
}
