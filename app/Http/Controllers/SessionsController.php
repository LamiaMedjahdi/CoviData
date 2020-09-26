<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {

        return view('login');
    }

    public function store(Request $request)
    {


         $credentials = $request->only(['email', 'password']);
        if (!Auth::attempt($credentials)) {
          
            return back()->withErrors([
                'message' => 'Email ou mot de passe incorrecte',
            ]);
        }
   
        return redirect('/acceuil');
    }

    public function destroy()
    {

        auth()->logout();
        return redirect('/acceuil');
    }
}
