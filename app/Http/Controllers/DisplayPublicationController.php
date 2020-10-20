<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class DisplayPublicationController extends Controller
{
    public function Publications()
    {
        
        $allposts= DB::table('informations')->get();
        $id= Auth::user()->id;
        $wilaya_id=Auth::user()->wilaya_id;
        $profession_id = Auth::user()->pro_id;
        $commune_id = Auth::user()->com_id;
        $wilaya_id = DB::table('communes')->find($commune_id);
       
        
         $postcondition = DB::table("informations")->select('*')
         ->whereIn('mal_id', function ($query) use($id) {
             $query->select('id')->from('citoyen_maladies')->where('cit_id', $id);
         })->orWhere('pro_id',$profession_id)
         ->orWhere('wilaya_id',$wilaya_id->wilaya_id)
             ->get();
               
    

        return view('publications', compact('allposts', 'postcondition'));
    }

    public function publicationsadmin()
    {
        if (Auth::check() and Auth::user()->roles == 1) {
            $publications = DB::table('informations')->select('informations.*', 'wilayas.nom','maladies.nom as maladie','professions.nom as profession','sources.nom as source' )
            ->join('wilayas', 'wilayas.id', '=', 'informations.wilaya_id')
                ->join('maladies', 'maladies.id', '=', 'informations.mal_id')
                ->join('professions', 'professions.id', '=', 'informations.pro_id')
                ->join('sources', 'sources.id', '=', 'informations.sou_id')
                ->orderBy('informations.date', 'desc')
                
            ->get();
            return view('publications-admin', compact('publications'));
        } elseif (Auth::check() and Auth::user()->roles == 0) {
            return redirect()->back();

        }
    }

    public function publicationbyid(Request $request)
    {   
        $id=$request->pubid;
        $postdetail = DB::table('informations')->find($id);
        

        return view('modifier-publication', compact('postdetail'));
    }


    public function supprimer_pub(Request $request)
        {
            $id=$request->pubid;
        $query=Information::where([ 'id' => $id])->delete();
        return redirect("/publications-admin");
        }

    
//admiiiiiiin 

    public function Publication_detail($id)
    {
        $postdetail = DB::table('informations')->find($id);
        $tags =  DB::table('tags')
        ->join('poststag', function ($join) use ($id) {
            $join->on('poststag.tags_id', '=', 'tags.id')
            ->where('poststag.information_id', '=', $id);
        })->get();

        return view('publication', compact('postdetail', 'tags'));
    }



 public function Publication_by_tags($id)
    {
        $poststag = DB::table('informations')
        ->join('poststag', function ($join) use ($id) {
            $join->on('informations.id', '=', 'poststag.information_id')
            ->where('poststag.tags_id', '=', $id);
        })->get();

        $tag= DB::table('tags')->find($id);


        return view('pubstag', compact('poststag', 'tag'));

        
    }




    public function favoris($id, $userid)
    {
        if (Auth::check()) {
            $cit_id = $userid;
            $info_id = $id;
            $date = NOW();
            if((DB::table('favoris')->where('info_id', $info_id)->where('cit_id',$cit_id)->exists()) )
            {
               return redirect("/publications")->with('message', 'Cette publication est deja dans vos favoris');
            }else{
            $insert=DB::insert("insert into favoris (date,info_id,cit_id) value(?,?,?) ",[$date,$info_id, $cit_id]);
            return redirect("/publications");
            }
            
            
               
        } else return redirect("/publications");
    }


   


     public function searchinformation(Request $request)
     {
         $request->validate([
             'recherche' => 'required'
         ]);
         $q = $request->recherche;
         $filtre = DB::table('informations')
         ->where('titre', 'like', '%' . $q . '%')
         ->orWhere('contenu', 'like', '%' . $q . '%')
         ->orWhere('lien', 'like', '%' . $q . '%')->get();

         if ($filtre != NULL) {
             return view('searchinformation', compact('filtre','q'));
         } 
     }

    public function searchinformations(Request $request)
    {
        $request->validate([
            'recherche' => 'required'
        ]);
        $q = $request->recherche;
        $filtre = DB::table('informations')
        ->where('titre', 'like', '%' . $q . '%')
            ->orWhere('contenu', 'like', '%' . $q . '%')
            ->orWhere('lien', 'like', '%' . $q . '%')->get();

        if ($filtre != NULL) {
            return view('searchinformations', compact('filtre', 'q'));
        }
    }


    //ajouter tag

    public function ajouter_tag(Request $request)
    {

        $this->validate(request(), [
            'tag' => 'required|max:20|string',
            
        ]);

        $tag=$request->tag;
        $tagexist = DB::table('tags')->where('nom', $tag)->first();
        if ($tagexist == null) {
            $insert = DB::insert("insert into tags (nom) value(?) ", [$tag]);
        } else return Redirect('/ajouter-publication')->with('message', 'Ce tag existe déjà');


        


  return Redirect('/ajouter-publication');
    }


    //ajouter profession 

    public function ajouter_profession(Request $request)
    {

       
        $this->validate(request(), [
            'profession' => 'required|max:20|string',

        ]);

        $profession = $request->profession;
        $professionexist = DB::table('professions')->where('nom', $profession)->first();
        if ($professionexist == null) {
            $insert = DB::insert("insert into professions (nom,created_at,updated_at) value(?,NOW(),NOW()) ", [$profession]);
        }
        else return Redirect('/ajouter-publication')->with('message', 'Cette profession existe déjà');

        return Redirect('/ajouter-publication');
    }

    public function ajouter_source(Request $request)
    {


        $this->validate(request(), [
            'source' => 'required|min:5|string',

        ]);

        $source = $request->source;
        $sourceexist = DB::table('sources')->where('nom', $source)->first();
        if ($sourceexist == null) {
            $insert = DB::insert("insert into sources (nom,created_at,updated_at) value(?,NOW(),NOW()) ", [$source]);
        } else return Redirect('/ajouter-publication')->with('message', 'Cette source d information existe déjà');

        return Redirect('/ajouter-publication');
    }


    // ajouter publication awedi 

    public function ajouter_pub(Request $request)
    {

         $this->validate(request(),[
             'titre' => 'required|min:10|string',
             'contenu' => 'required|min:5|string',
              'image' => 'image|mimes:jpg,jpeg,png|max:2048',
            
         ]);




        $signal = new Information;
        $signal->titre = $request->titre;
        $signal->contenu = $request->contenu;
        $signal->lien = $request->lien;
        $signal->mal_id = $request->maladie;
        $signal->pro_id = $request->profession;
        $signal->sou_id = $request->source;
        $signal->wilaya_id = $request->wilaya;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/publications/', $filename);
            $signal->image = $filename;
        }
        $time = now();
        $signal->date=$time;


        $signal->save();
        $id=$signal->id;
        $tags=$request->input('tags');
        
        foreach ($tags as $tag) {
            $insert = DB::insert("insert into poststag (information_id,tags_id,created_at,updated_at) value(?,?,?,?) ", [$id, $tag, $time,$time]);
        }





        return Redirect('/ajouter-publication');
    }


    public function modifier_pub(Request $request)
    {

       
        $id = $request->pubid;
        $titre = $request->titre;
        $contenu = $request->contenu;
        $lien = $request->lien;
        $maladie = $request->maladie;
        $profession = $request->profession;
        $source = $request->source;
        $wilaya = $request->wilaya;
        



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/publications/', $filename);
            $image = $filename;
        } else {
            $image = $request->ancienneimage;
        }

        
            $query = DB::table('informations')
                ->where('id', $id)
                ->update([
                'titre' => $titre,
                    'contenu' => $contenu,
                'lien' => $lien,
                    'mal_id' => $maladie,
                    'pro_id' => $profession,
                'sou_id' => $source,
                'wilaya_id' => $wilaya,
                    'image' => $image
                ]);
       
        


        return Redirect('/publications-admin');
    }


}




