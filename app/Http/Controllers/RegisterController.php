<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function show () {
        if (Auth::check()) {
            return redirect('/home');
        }

        return view('auth.register');
    }

    public function register (RegisterRequest $req) {
        $age = 0;
        if ($req->age != "0") {
            $age = intval($req->age);
        }

        if ($age < 18) {
            return redirect('/register')->with('error', 'No tienes 18');
        }
        
        User::create($req->validated());

        return redirect('/login')->with('success', 'Te has registrado exitosamente');
    }
}
