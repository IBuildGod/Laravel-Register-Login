<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:8|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8',
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
