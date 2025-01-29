<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('pages.profile.index', [
            "user" => $user,
            "recipes" => $user->recipes()->latest()->paginate(12)
        ]);
    }
    public function dashboard()
    {
        return view("pages.profile.dashboard", [
            "recipes" => Auth::user()->recipes()->latest()->paginate(12)
        ]);
    }
}
