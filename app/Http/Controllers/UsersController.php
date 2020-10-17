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
        $commune=$request->commune;
        $profession = $request->profession;
       

        if($q!="" AND $commune==NULL AND  $profession==NULL)
        {
             $filtre = DB::table('citoyens')
        ->where('nom', 'like', '%' . $q . '%')
            ->orWhere('prenom', 'like', '%' . $q . '%')
            ->orWhere('email', 'like', '%' . $q . '%')->get();
        }
        elseif($q != "" AND $commune!=NULL AND $profession!=NULL)
        {
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
        } 
         elseif ($q == "" and $commune != NULL and $profession == NULL) {
             $filtre = DB::table('citoyens')->where('com_id', $commune)
                 ->get();
         } elseif ($q == "" and $commune == NULL and $profession != NULL) {
             $filtre = DB::table('citoyens')->where('pro_id', $profession)
                 ->get();
         } elseif ($q == "" and $commune == NULL and $profession == NULL) {
            $filtre = DB::table('citoyens')->where('nom','=', '')
                ->get();
        } 
        if ($filtre) {
            return view('searchusers', compact('filtre' ));
        } 
    }
}
