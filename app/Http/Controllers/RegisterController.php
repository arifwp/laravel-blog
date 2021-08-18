<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required', 'min:3', 'max:255', 'unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max: 255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //redirect ke halaman login dan menampilkan flash massage
        $request->session()->flash('success', 'Registration Successfull');
        return redirect('/login');

    }

}
