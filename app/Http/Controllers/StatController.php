<?php

namespace App\Http\Controllers;

use App\Stat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;



class StatController extends Controller
{
    public function statistiquestoday()
    {
        if (Auth::check() and Auth::user()->roles == 1) {

        $todays = DB::table('stats')->select('stats.*','wilayas.nom as wilaya', 'wilayas.id as wilayaid' )
        ->join('wilayas', 'wilayas.id', '=', 'stats.wilaya_id')
        ->whereDate('stats.date', \Carbon\Carbon::today())
        ->get();

        $stats = DB::table('stats')->select('stats.*', 'wilayas.nom as wilaya', 'wilayas.id as wilayaid')
        ->join('wilayas', 'wilayas.id', '=', 'stats.wilaya_id')
        ->orderBy('stats.nbrmal', 'desc')
        ->get();

        return view('statistiques', compact('todays','stats'));}
        else return redirect()->back();
    }


    public function statistiquebyid(Request $request)
    {

        if (Auth::check() and Auth::user()->roles == 1) {
        $id = $request->statid;
        
        $statdetail = DB::table('stats')
                
         ->find($id);
        
        
        return view('/modifier-statistique', compact('statdetail'));
        } else return redirect()->back();
    }


    public function modifier_stat(Request $request)
    {
        $this->validate(request(), [
            'malade' => 'required|integer',
            'gueris' => 'required|integer',
            'mort' => 'required|integer',
        ]);

        $id = $request->statid;
        $cas = $request->malade;
        $morts = $request->gueris;
        $gueris = $request->mort;
        $wilaya = $request->wilaya;
        $timee= today();
        
        $time=now();

        $date = DB::table('stats')->where('id', $id)->where('date',$timee)->first();
        if ($date == null)
        {
            $query = DB::table('stats')->where('id', $id)
            ->update([
        
                'nbrmal' => $cas,
                'nbrgue' => $gueris,
                'nbrmort' => $morts,
                'wilaya_id' => $wilaya,
            'updated_at' => $time,
                'created_at' => $time,
                
         
            ]);
        }else {
            $query = DB::table('stats')->where('id', $id)
                ->update([

                    'nbrmal' => $cas,
                    'nbrgue' => $gueris,
                    'nbrmort' => $morts,
                    'wilaya_id' => $wilaya,
                    'updated_at' => $time,
                    

                ]);

        }

    

 return Redirect('/statistiques');
    }

    public function create()
    {
    }

    public function ajouter_stat(Request $request)
    {

        $this->validate(request(), [
            'nbrcas' => 'required|integer',
            'nbrmorts' => 'required|integer',
            'nbrgueris' => 'required|integer',
        ]);




        $stat = new Stat();
        $stat->nbrmal = $request->nbrcas;
        $stat->nbrmort = $request->nbrmorts;
        $stat->nbrgue = $request->nbrgueris;
        $time = now();
        $stat->date = $time;
        $stat->wilaya_id = $request->wilaya;

       
        


        $stat->save();
       
        return Redirect('/ajouter-statistiques');
    }

    public function supprimer_stat(Request $request)
    {
        $id = $request->statid;
        $query = Stat::where(['id' => $id])->delete();
        return redirect("/statistiques");
    }

    
}
