<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\input;
use App\Signal;

class SignalsController extends Controller
{
    public function signals()
    {
        $signals = DB::table('signals')
            ->select('signals.id', 'signals.contenu', 'signals.created_at', 'categories.label', 'citoyens.nom', 'signals.image', 'signals.wilaya_id' )
            ->join('categories', 'categories.id', '=', 'signals.cat_id')
            ->join('citoyens', 'citoyens.id', '=', 'signals.cit_id')
            ->join('wilayas', 'wilayas.id', '=', 'signals.wilaya_id')
            ->where('signals.etat', '=', 1)
            ->orderBy('signals.date', 'desc')
            ->get();
        $categories = DB::table('categories')->get();
        $wilayas = DB::table('wilayas')->get();
        return view('signals', compact('signals', 'categories', 'wilayas'));
    }

    public function signal($id)
    {

        if (Signal::where('id', $id)->exists()) {
            $signal = DB::table('signals')
                ->find($id);
            $categorie = DB::table('categories')->where('id', $signal->cat_id)->first();
            $citoyen = DB::table('citoyens')->where('id', $signal->cit_id)->first();
            $wilaya = DB::table('wilayas')->where('id', $signal->wilaya_id)->first();

            return view('signal', compact('signal', 'categorie', 'citoyen', 'wilaya'));
        } else  return Redirect::to('signals');
    }

    public function store(Request $request)
    {
        //  $this->validate(request(),[
        //      'title' => 'required|max:50|string',
        //      'content' => 'required|min:20|string',
        //      // 'image' => 'image|mimes:jpg,jpeg,png|max:2048',
        //  ]);

        $signal = new Signal;
        $signal->contenu = $request->contenu;

        $signal->cit_id = $request->user;
        $signal->cat_id = $request->categorie;
        $signal->date = $request->date;
        $signal->wilaya_id = $request->wilaya;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/signals/', $filename);
            $signal->image = $filename;
        }


        $signal->save();





        return Redirect('/signals');
    }
}
