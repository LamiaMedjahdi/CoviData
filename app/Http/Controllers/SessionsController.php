<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {

        return view('login');
    }

    public function store()
    {

        if(!auth()->attempt(request(['email','password'])))
        {
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
