<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\input;
use Illuminate\Support\Facades\Validator;
use App\Citoyen;

class UsersController extends Controller
{
    public function searchusers(Request $request)
    {
        // $request->validate([
        //     'recherche' => 'required'
        // ]);
        $q = $request->recherche;
        $commune = $request->commune;
        $profession = $request->profession;


        if ($q != "" and $commune == NULL and  $profession == NULL) {
            $filtre = DB::table('citoyens')
                ->where('nom', 'like', '%' . $q . '%')
                ->orWhere('prenom', 'like', '%' . $q . '%')
                ->orWhere('email', 'like', '%' . $q . '%')->get();
        } elseif ($q != "" and $commune != NULL and $profession != NULL) {
            $filtre = DB::table('citoyens')->where('com_id', $commune)
                ->where('pro_id', $profession)
                ->where(function ($query) use ($q) {
                    $query->where('nom', 'like', '%' . $q . '%')
                        ->orWhere('prenom', 'like', '%' . $q . '%')
                        ->orWhere('email', 'like', '%' . $q . '%');
                })->get();
        } elseif ($q != "" and $commune == NULL and $profession != NULL) {
            $filtre = DB::table('citoyens')
                ->where('pro_id', $profession)
                ->where(function ($query) use ($q) {
                    $query->where('nom', 'like', '%' . $q . '%')
                        ->orWhere('prenom', 'like', '%' . $q . '%')
                        ->orWhere('email', 'like', '%' . $q . '%');
                })->get();
        } elseif ($q != "" and $commune != NULL and $profession == NULL) {
            $filtre = DB::table('citoyens')->where('com_id', $commune)
                ->where(function ($query) use ($q) {
                    $query->where('nom', 'like', '%' . $q . '%')
                        ->orWhere('prenom', 'like', '%' . $q . '%')
                        ->orWhere('email', 'like', '%' . $q . '%');
                })->get();
        }
        //recherche null
        elseif ($q == "" and $commune != NULL and $profession != NULL) {
            $filtre = DB::table('citoyens')->where('com_id', $commune)
                ->where('pro_id', $profession)
                ->get();
        } elseif ($q == "" and $commune != NULL and $profession == NULL) {
            $filtre = DB::table('citoyens')->where('com_id', $commune)
                ->get();
        } elseif ($q == "" and $commune == NULL and $profession != NULL) {
            $filtre = DB::table('citoyens')->where('pro_id', $profession)
                ->get();
        } elseif ($q == "" and $commune == NULL and $profession == NULL) {
            $filtre = DB::table('citoyens')->where('nom', '=', '')
                ->get();
        }
        if ($filtre) {
            return view('searchusers', compact('filtre'));
        }
    }


    public function makeadmin($id)
    {
        $query = DB::table('citoyens')
            ->where('id', $id)
            ->update(['roles' => "1"]);
        return redirect('/users');
    }

    public function makeuser($id)
    {
        $query = DB::table('citoyens')
            ->where('id', $id)
            ->update(['roles' => "0"]);
        return redirect('/users');
    }

    //modifier les coordonnées du compte
    public function modifyuser(Request $request)
    {

        $nom = $request->nom;
        $id = $request->userid;
        $prenom = $request->prenom;
        $commune = $request->commune;
        $profession = $request->profession;
        


         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time() . '.' . $extension;
             $file->move('images/users/', $filename);
             $image = $filename;
         } else {
            $image = $request->imageancienne;
        }
        
        if($nom!=NULL AND $prenom!=NULL)
        {
             $query = DB::table('citoyens')
            ->where('id', $id)
            ->update([
                'nom' => $nom,
                'prenom' => $prenom,
                'com_id' => $commune,
                'pro_id' => $profession,
                'image' => $image
            ]);
        }
        else{
            $query = DB::table('citoyens')
            ->where('id', $id)
            ->update([
               
                'com_id' => $commune,
                'pro_id' => $profession,
                'image' => $image
            ]);
        }

        return redirect('/mon-compte');
    }

    public function displayusers()
    {
        $users = DB::table('citoyens')->where('id', '!=', auth()->id())
            ->get();

        return view('users', compact('users'));
    }
}
