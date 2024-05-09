<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(){
        return view('register');
    }

    public function store(){

        $validated=request()->validate(
            [
            'name'=>'required|min:3|max:40',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed',

            ]
        );
        // dump($validated);

        $user=User::create([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'password'=>Hash::make($validated['password'])
        ]);
       return redirect()->route('index')->with('success','Contul a fost creat!');

    }



    public function login(){
        return view('login');
    }

    public function authenticate(){



        $validated=request()->validate(
            [

            'email'=>'required|email',
            'password'=>'required',

            ]
        );

        request()->session()->regenerate();

        if(auth()->attempt($validated)){
            return redirect()-> route('index')->with('success', 'Log in successfuly');
        }


       return redirect()->route('login')->withErrors([
        'email' => "No matching user found with the provided email and password "
       ]);

    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();


        return redirect()->route('index')->with('success', 'Log in successfuly');
    }

    public function profile()
    {
        $user = auth()->user();
        return view('profil', compact('user'));
    }
}
