<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function dashadmin(){

        return view('dash_admin');
    }

    public function ajoutmembre(){

        return view('auth/admin/ajout_membre');
    }

    public function inscription(){
        $data=request()->validate([
            'name'=>['required','string'],
            'email'=>['required','string','email','unique:users'],
            'password'=>['required', 'confirmed', 'min:3', 'max:6']
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
            Session::flash('message', 'Ajout réussi! Veuillez entrer vos identifiants pour vous connecter.');
            Session::flash('alert-class', 'alert-success text-center');
            return redirect()->back();
    }
}
