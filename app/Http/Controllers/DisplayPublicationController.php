<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DisplayPublicationController extends Controller
{
    public function Publications()
    {
        $allposts= DB::table('informations')->get();
        // $postscondition = DB::table('informations')
        //  ->join('citoyen_maladies', 'informations.mal_id', '=', 'citoyen_maladies.mal_id ')
        //  ->join('citoyens', 'informations.pro_id', '=', 'citoyens.pro_id')
        //  ->join('communes', 'informations.wilaya_id', '=', 'communes.wilaya_id')
        //  ->where('citoyens.id', '=', 1)
        //  ->where('citoyen_maladies.cit_id', '=', 1)
        //  ->where('communes.id', '=', 'citoyens.com_id')
        //  ->select('titre','contenu')
        //  ->get();

// SELECT titre,contenu FROM informations 
// INNER JOIN citoyen_maladies
// ON informations.mal_id = citoyen_maladies.mal_id 
// INNER JOIN citoyens
// ON informations.pro_id=citoyens.pro_id
// INNER JOIN communes 
// ON informations.wilaya_id=communes.wilaya_id
// WHERE citoyens.id='1'
// AND citoyen_maladies.cit_id='1'
// AND communes.id=citoyens.com_id


// select * from informations WHERE (mal_id IN (select mal_id from citoyen_maladies where cit_id='1')
//  AND pro_id IN (select pro_id from citoyens where id='1') 
// AND wilaya_id IN (select wilaya_id from communes where id IN (SELECT com_id FROM citoyens WHERE id='1')));                
    

        return view('publications', compact('allposts'));
    }

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




