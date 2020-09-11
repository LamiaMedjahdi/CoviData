<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citoyen;
use Illuminate\Support\Facades\input;


use Auth;


class RegistrationController extends Controller
{
    public function create()
    {
        
        return view('register');
    }

    public function store(Request $request)
    {
        //register
            $citoyen = new Citoyen; 
            $citoyen -> nom=$request->fullname;
            $citoyen->prenom = $request->firstname;
            $citoyen->email = $request->email;
            $citoyen->password = bcrypt($request->password);
            $citoyen->com_id = 1;
            $citoyen->pro_id = 1;
            $citoyen->image = 1;
            $citoyen->roles = 0;
            $citoyen->save();

        //login
            //  auth()->login($citoyen);

            
            return redirect('/acceuil');
            
    }

   }
