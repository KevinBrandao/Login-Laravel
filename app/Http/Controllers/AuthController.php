<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signin(Request $request)
    {
        if(auth()->attempt($request->only('email','password')));{
        return redirect('/dashboard');
    }
          return redirect('/login');   
}
    public function register(){
        return view('register');
    }
        public function signup(Request $request)
        {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            return redirect('/login');
        }
        public function logout()
        {
            auth()->logout();
            return redirect('/login');
        }
    }