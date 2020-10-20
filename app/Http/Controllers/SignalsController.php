<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\input;
use Illuminate\Support\Facades\Validator;
use App\Signal;
use App\Idee;

class SignalsController extends Controller
{
    public function signals()
    {
        $signals = DB::table('signals')
            ->select('signals.id', 'signals.contenu','signals.localisation', 'signals.created_at', 'categories.label', 'citoyens.nom', 'signals.image', 'signals.wilaya_id' )
            ->join('categories', 'categories.id', '=', 'signals.cat_id')
            ->join('citoyens', 'citoyens.id', '=', 'signals.cit_id')
            ->join('wilayas', 'wilayas.id', '=', 'signals.wilaya_id')
            ->where('signals.etat', '=', 1)
            ->orderBy('signals.date', 'asc')
            ->get();
        $categories = DB::table('categories')->get();
        $wilayas = DB::table('wilayas')->get();
        return view('signals', compact('signals', 'categories', 'wilayas'));
    }



 public function displaysignals()
    {
        if (Auth::check() and Auth::user()->roles == 1) {
        $signals = DB::table('signals')
            ->select('signals.id', 'signals.contenu','signals.localisation', 'signals.created_at','wilayas.nom as wilaya', 'categories.label', 'citoyens.nom as nomcit', 'citoyens.prenom', 'signals.image', 'signals.wilaya_id' )
            ->join('categories', 'categories.id', '=', 'signals.cat_id')
            ->join('citoyens', 'citoyens.id', '=', 'signals.cit_id')
            ->join('wilayas', 'wilayas.id', '=', 'signals.wilaya_id')
            ->where('signals.etat', '=', 1)
            ->orderBy('signals.date', 'asc')
            ->get();
        } elseif (Auth::check() and Auth::user()->roles == 0) {
            $signals = DB::table('signals')
                ->select('signals.id', 'signals.contenu', 'signals.localisation', 'signals.created_at', 'wilayas.nom as wilaya', 'categories.label', 'citoyens.nom as nomcit', 'citoyens.prenom', 'signals.image', 'signals.wilaya_id')
                ->join('categories', 'categories.id', '=', 'signals.cat_id')
                ->join('citoyens', 'citoyens.id', '=', 'signals.cit_id')
                ->join('wilayas', 'wilayas.id', '=', 'signals.wilaya_id')
                ->where('signals.etat', '=', 1)->where('signals.cit_id', Auth::user()->id)
                ->orderBy('signals.date', 'asc')
                ->get();
        }
        $categories = DB::table('categories')->get();
        $wilayas = DB::table('wilayas')->get();
        return view('signalements', compact('signals', 'categories', 'wilayas'));
    }



     public function displaysignalsenattente()
    {
        if (Auth::check() and Auth::user()->roles == 1) {
        $signals = DB::table('signals')
            ->select('signals.id', 'signals.contenu','signals.localisation', 'signals.created_at','wilayas.nom as wilaya', 'categories.label', 'citoyens.nom as nomcit', 'citoyens.prenom', 'signals.image', 'signals.wilaya_id' )
            ->join('categories', 'categories.id', '=', 'signals.cat_id')
            ->join('citoyens', 'citoyens.id', '=', 'signals.cit_id')
            ->join('wilayas', 'wilayas.id', '=', 'signals.wilaya_id')
            ->where('signals.etat', '=', 0)
            ->orderBy('signals.date', 'asc')
            ->get();
            $categories = DB::table('categories')->get();
            $wilayas = DB::table('wilayas')->get();
            return view('signalements-en-attente', compact('signals', 'categories', 'wilayas'));
        }
        else return redirect()->back();
        
        
    }

    public function signal($id)
    {

        if (Signal::where('id', $id)->exists()) {
            $signal = DB::table('signals')
                ->find($id);
            $categorie = DB::table('categories')->where('id', $signal->cat_id)->first();
            $citoyensign = DB::table('citoyens')->where('id', $signal->cit_id)->first();
            $wilaya = DB::table('wilayas')->where('id', $signal->wilaya_id)->first();
            

            return view('signal', compact('signal', 'categorie', 'citoyensign', 'wilaya'));
        } else  return Redirect::to('signals');
    }


    public function approuver_signal($id)
    {

        if (Auth::check() and Auth::user()->roles == 1) {
            $query = DB::table('signals')
                ->where('id', $id)
                ->update(['etat' => "1"]);
         return redirect()->back();
        } else  return Redirect::to('signalements');
       
    }
    public function refuser_signal($id)
    {

        if (Auth::check() and Auth::user()->roles == 1) {
            $query = DB::table('signals')
            ->where('id', $id)
                ->update(['etat' => "2"]);
            return Redirect::to('signalements-en-attente');
        } else  return Redirect::to('signalements');
    }

    public function displaysignal($id)
    {

        if (Signal::where('id', $id)->exists()) {
            $signal = DB::table('signals')->where('etat','!=', '2')
            ->find($id);
            $categorie = DB::table('categories')->where('id', $signal->cat_id)->first();
            $citoyensign = DB::table('citoyens')->where('id', $signal->cit_id)->first();
            $wilaya = DB::table('wilayas')->where('id', $signal->wilaya_id)->first();


            return view('signalement', compact('signal', 'categorie', 'citoyensign', 'wilaya'));
        } else  return Redirect::to('signalements');
    }

    // protected function validator(array $request)
    // {
    //     $validator = Validator::make($request, [
    //         'content' => ['required', 'string', 'min:20', 'max:255'],
    //         'image' => ['image|mimes:jpg,jpeg,png', 'max:2048'],
            
    //     ]);
    // }

    public function store(Request $request)
    {

    // $this->validate(request(),[
    //     'title' => 'required|max:50|string',
    //     'content' => 'required|min:20|string',
    //      'image' => 'image|mimes:jpg,jpeg,png|max:2048',
    // ]);
    

       

        $signal = new Signal;
        $signal->contenu = $request->contenu;

        $signal->cit_id = $request->user;
        $signal->cat_id = $request->categorie;
        $signal->date = $request->date;
        $signal->wilaya_id = $request->wilaya;

        $wilaya = DB::table('wilayas')->where('id', $request->wilaya)->first();
        $wilayaname=$wilaya->nom;
        $motcles=$request->motcles;
        $signal->localisation = $wilayaname.' '.$request->commune.' '.$motcles;



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/signals/', $filename);
            $signal->image = $filename;
        }


        $signal->save();





        return redirect("/signals")->with('message', 'Votre signalement est envoyé aux administrateurs et est en cours de consultation');
    }

    public function signalbycat($cat,$id)
    {

        if (Signal::where('cat_id', $id)->exists() ) {
            $signals = Signal::where('cat_id',$id)->get();
                $categorie = $cat;
            
            
            

            return view('signalbycat', compact('signals', 'categorie'));
        } else  return Redirect::to('signals');
    }

    public function GetCommuneEdit($id)
    {
        echo json_encode(DB::table('communes')->where('wilaya_id', $id)->get());
    }

    public function Contributions($nom, $id)
    {
        if (Signal::where('cit_id', $id)->exists() OR Idee::where('cit_id', $id)->exists()  ) {
            $signals = DB::table('signals')
            ->where('cit_id', $id)->get();
            $idees = DB::table('idees')
             ->where('cit_id', $id)->get();
            
            $nom = $nom;




            return view('idees_signals_user', compact('signals','idees', 'nom'));
        } else  return redirect()->back();
    }

    public function searchsignal(Request $request)
    {
        $request->validate([
            'recherche' => 'required'
        ]);

        $q = $request->recherche;
        $filtre = Signal::where('etat', '=', '1')
        ->where(function ($query) use ($q) {
            $query->where('localisation', 'like', '%' . $q . '%')
                ->orWhere('contenu', 'like', '%' . $q . '%');
        })->get();


        if ($filtre!=NULL) {
            return view('/searchSignal', compact('filtre'));
        } else {
            return "pas de resultat pour cette recherche";
        }
    }


    public function modifier_signal(Request $request)
    {

        
        $id = $request->signalid;
        $contenu = $request->contenu;
        $cit_id = $request->cit_id;
        $cat_id = $request->categorie;



        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/signals/', $filename);
            $image = $filename;
        } else {
            $image = $request->imageancienne;
        }

        if ($contenu != NULL) {
            $query = DB::table('signals')
            ->where('id', $id)
                ->update([
                    'contenu' => $contenu,
                    'cit_id' => $cit_id,
                    'cat_id' => $cat_id,
                    'image' => $image
                ]);
        } else {
            $query = DB::table('signals')
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
