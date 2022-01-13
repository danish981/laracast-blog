<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller {
    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'max:255', 'unique:users,username'],
            // 'username' => ['required', 'max:255', Rule::unique('users', 'username')],    //same as above
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:7']
        ]);

        // $attributes['password'] = bcrypt($attributes['password']);
        // Hash::check('password', $attributes['password']);    // to check if the password matches the hashed password
        // session()->flash('success', 'Your account has been created');

        User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created');  // the same as session flash, click the with() method
    }
}
