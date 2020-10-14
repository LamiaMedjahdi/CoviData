<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\input;
use App\Idee;

class IdeesController extends Controller
{
    public function idees()
    {
        $idees = DB::table('idees')
        ->select('idees.id', 'idees.titre', 'idees.contenu', 'idees.created_at', 'categories.label', 'citoyens.nom', 'idees.image', 'idees.like','idees.dislike')
         ->join('categories', 'categories.id', '=', 'idees.cat_id')
        ->join('citoyens', 'citoyens.id', '=', 'idees.cit_id')
        ->where('idees.etat', '=', 1)
        ->orderBy('like','desc')
        ->get();
        $categories = DB::table('categories')->get();
        return view('idees', compact('idees', 'categories'));
    }

    public function idee($id)
    {
       
        if (Idee::where('id', $id)->exists()) {
           $idee = DB::table('idees')
            ->find($id);
        $categorie= DB::table('categories')-> where('id', $idee->cat_id)->first();
        $citoyen = DB::table('citoyens')->where('id', $idee->cit_id)->first();
        
        return view('idee', compact('idee', 'categorie', 'citoyen'));
        }
        else  return Redirect::to('idees');
        
    }

    public function store(Request $request)
    {
    //    
        // $this->validate($request, array([
        //  'title' => 'required|max:50|string',
        //  'content' => 'required|min:20|string',
        //  'image' => 'image|mimes:jpg,jpeg,png|max:2048',
        // ]));

        
        
        $idee = new Idee;
        $idee->titre = $request->titre;
        $idee->contenu = $request->contenu;
        
        $idee->cit_id = $request->user;
        $idee->cat_id = $request->categorie;

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension; 
            $file->move('images/idees/',$filename);
            $idee->image = $filename;
        }
        

        $idee->save();
        
        
       
            

         return Redirect('/idees');
    }

    public function ideesbycat($cat, $id)
    {

        if (Idee::where('id', $id)->exists()) {
            $idees = DB::table('idees')
            ->where('cat_id', $id)->get();
            $categorie = $cat;




            return view('ideesbycat', compact('idees', 'categorie'));
        } else  return Redirect::to('idees');
    }

}
