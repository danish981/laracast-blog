<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => ['required', 'max:255'],
            'name' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7']
        ]);

        // $attributes['password'] = bcrypt($attributes['password']);
        // Hash::check('password', $attributes['password']);    // to check if the password matches the hashed password


        User::create($attributes);
        return redirect('/');

    }
}
