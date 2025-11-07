<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // Validation
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);

        // Create user
        $user = User::create($validatedAttributes);

        // Login
        Auth::login($user);

        return redirect('/jobs');
    }
}
