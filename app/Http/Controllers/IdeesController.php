<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\input;
use App\Idee;

use App\Like;
use App\Dislike;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;

class IdeesController extends Controller
{
    public function idees()
    {
        $idees = DB::table('idees')
        ->select('idees.id', 'idees.titre', 'idees.contenu', 'idees.created_at', 'categories.label', 'citoyens.nom','idees.image')
         ->join('categories', 'categories.id', '=', 'idees.cat_id')
        ->join('citoyens', 'citoyens.id', '=', 'idees.cit_id')
        ->where('idees.etat', '=', 1)
        ->get();
        
        $categories = DB::table('categories')->get();
        return view('idees', compact('idees', 'categories'));
    }

    // admin 
    public function displayidees()
    {
        if (Auth::check() and Auth::user()->roles == 1) {
        $idees = DB::table('idees')
            ->select('idees.id', 'idees.titre', 'idees.contenu', 'idees.created_at', 'categories.label', 'citoyens.nom as nomcit', 'citoyens.prenom', 'idees.image')
            ->join('categories', 'categories.id', '=', 'idees.cat_id')
            ->join('citoyens', 'citoyens.id', '=', 'idees.cit_id')
            ->where('idees.etat', '=', 1)
            ->get();
            

        } elseif (Auth::check() and Auth::user()->roles == 0)
        {
            $idees = DB::table('idees')
            ->select('idees.id', 'idees.titre', 'idees.contenu', 'idees.created_at', 'categories.label', 'citoyens.nom as nomcit', 'citoyens.prenom', 'idees.image')
            ->join('categories', 'categories.id', '=', 'idees.cat_id')
            ->join('citoyens', 'citoyens.id', '=', 'idees.cit_id')
            ->where('idees.etat', '=', 1)->where('idees.cit_id', Auth::user()->id)
            ->get();
        }

        $categories = DB::table('categories')->get();
        return view('idees-admin', compact('idees', 'categories'));
    }


    public function displayideesenattente()
    {
        $idees = DB::table('idees')
        ->select('idees.id', 'idees.titre', 'idees.contenu', 'idees.created_at', 'categories.label', 'citoyens.nom as nomcit', 'citoyens.prenom', 'idees.image')
        ->join('categories', 'categories.id', '=', 'idees.cat_id')
        ->join('citoyens', 'citoyens.id', '=', 'idees.cit_id')
        ->where('idees.etat', '=', 0)
        ->get();

        $categories = DB::table('categories')->get();
        return view('idees-en-attente', compact('idees', 'categories'));
    }

    public function displayidee($id)
        {
        
            if (Idee::where('id', $id)->exists()) {
            $idee = DB::table('idees')->where('etat', '!=', '2')
                ->find($id);
            $categorie= DB::table('categories')-> where('id', $idee->cat_id)->first();
            $citoyenidea = DB::table('citoyens')->where('id', $idee->cit_id)->first();
            $likeIdea=Idee::find($id);
            $likeCount=Like::where('idee_id', $likeIdea->id)->count();
            $dislikeCount = Dislike::where('idee_id', $likeIdea->id)->count();
            
            
            return view('idee-admin', compact('idee', 'categorie', 'citoyenidea','likeCount','dislikeCount'));
            }
            else  return Redirect::to('idees');
            
        }

    public function approuver_idee($id)
    {

        if (Auth::check() and Auth::user()->roles == 1) {
            $query = DB::table('idees')
            ->where('id', $id)
                ->update(['etat' => "1"]);
            return redirect()->back();
        } else  return Redirect::to('signalements');
    }
    public function refuser_idee($id)
    {

        if (Auth::check() and Auth::user()->roles == 1) {
            $query = DB::table('idees')
            ->where('id', $id)
                ->update(['etat' => "2"]);
            return Redirect::to('idees-en-attente');
        } else  return Redirect::to('idees-admin');
    }
    

    public function idee($id)
    {
       
        if (Idee::where('id', $id)->exists()) {
           $idee = DB::table('idees')
            ->find($id);
        $categorie= DB::table('categories')-> where('id', $idee->cat_id)->first();
        $citoyenidea = DB::table('citoyens')->where('id', $idee->cit_id)->first();
        $likeIdea=Idee::find($id);
        $likeCount=Like::where('idee_id', $likeIdea->id)->count();
        $dislikeCount = Dislike::where('idee_id', $likeIdea->id)->count();
        
        
        return view('idee', compact('idee', 'categorie', 'citoyenidea','likeCount','dislikeCount'));
        }
        else  return Redirect::to('idees');
        
    }

    


    public function like($id)
    {
        if(Auth::check())
        {
             $loggedin_user= Auth::user()->id;
        $like_user=Like::where(['user_id'=>$loggedin_user,'idee_id'=>$id])->first();
        $like_user2 = Dislike::where(['user_id' => $loggedin_user, 'idee_id' => $id])->first();
        if (empty($like_user->user_id) OR ($like_user2)) {
            $user_id = Auth::user()->id;
            $idee_id = $id;
            $like = new Like;
            $like->user_id = $user_id;
            $like->idee_id = $idee_id;
            $like->save();
            Dislike::where(['user_id' => $loggedin_user, 'idee_id' => $id])->delete();
            return redirect("/idee/{$id}");
        } else return redirect("/idee/{$id}");
        }
        else return redirect("/login");
       

    }

    public function dislike($id)
    {
        if (Auth::check()) {
            $loggedin_user = Auth::user()->id;
            $like_user = Dislike::where(['user_id' => $loggedin_user, 'idee_id' => $id])->first();
            $like_user2 = Like::where(['user_id' => $loggedin_user, 'idee_id' => $id])->first();
            if (empty($like_user->user_id) OR ($like_user2)) {
                $user_id = Auth::user()->id;
                $idee_id = $id;
                $like = new Dislike;
                $like->user_id = $user_id;
                $like->idee_id = $idee_id;
                $like->save();
                Like::where(['user_id' => $loggedin_user, 'idee_id' => $id])->delete();
                return redirect("/idee/{$id}");
            } else return redirect("/idee/{$id}");
        } else return redirect("/login");
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

        if (Idee::where('cat_id', $id)->exists()) {
            $ideees = DB::table('idees')
            ->where('cat_id', $id)->get();
            $categorie = $cat;




            return view('ideesbycat', compact('ideees', 'categorie'));
        } else  return Redirect::to('idees');
    }


    public function searchidea(Request $request)
    {
        $request->validate([
            'recherche' => 'required'
        ]);

        $q=$request->recherche;
        $filtre = Idee::where('etat', '=', '1')
                        ->where(function ($query) use ($q) {
                            $query->where('titre', 'like', '%' . $q . '%')
                              ->orWhere('contenu', 'like', '%' . $q . '%');})->get();  

                              
             if($filtre){
                 return view('searchIdea', compact('filtre'));
             }  
           
                        

    }

//modier idee
    public function modifier_idee(Request $request)
    {

        $titre = $request->titre;
        $id = $request->ideeid;
        $contenu = $request->contenu;
        $cit_id = $request->cit_id;
        $cat_id = $request->categorie;



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/idees/', $filename);
            $image = $filename;
        } else {
            $image = $request->imageancienne;
        }

        if ($titre != NULL and $contenu != NULL) {
            $query = DB::table('idees')
            ->where('id', $id)
                ->update([
                    'titre' => $titre,
                    'contenu' => $contenu,
                    'cit_id' => $cit_id,
                    'cat_id' => $cat_id,
                    'image' => $image
                ]);
        }
        elseif ($titre == NULL and $contenu != NULL) {
            $query = DB::table('idees')
                ->where('id', $id)
                ->update([
                    
                    'contenu' => $contenu,
                    'cit_id' => $cit_id,
                    'cat_id' => $cat_id,
                    'image' => $image
                ]);
        }
        elseif ($titre != NULL and $contenu == NULL) {
            $query = DB::table('idees')
                ->where('id', $id)
                ->update([
                    'titre' => $titre,
                    
                    'cit_id' => $cit_id,
                    'cat_id' => $cat_id,
                    'image' => $image
                ]);
        }
        else {
            $query = DB::table('idees')
            ->where('id', $id)
                ->update([

                'cit_id' => $cit_id,
                'cat_id' => $cat_id,
                'image' => $image
                ]);
        }

        return redirect()->back();
    }

}
