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
                
            ->get();
            return view('publications-admin', compact('publications'));
        } elseif (Auth::check() and Auth::user()->roles == 0) {
            return redirect()->back();

        }
    }

    public function publicationbyid($id)
    {
        $postdetail = DB::table('informations')->find($id);
        $tags =  DB::table('tags')
        ->join('poststag', function ($join) use ($id) {
            $join->on('poststag.tags_id', '=', 'tags.id')
            ->where('poststag.information_id', '=', $id);
        })->get();

        return view('publication-admin', compact('postdetail', 'tags'));
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


}




