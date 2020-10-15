<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Stat;

use Illuminate\Http\Request;

class HomeStatsController extends Controller
{
    public function datacases()
    {
        // $malades=DB::table('stats')->first();
        // $malades = DB::table('stats')->where('date', '=', DATE(now()));
        $maj =   DB::table('stats')->orderBy('id', 'desc')->value('created_at');
        $malades =   DB::table('stats')->whereDate('date', \Carbon\Carbon::today())->get()->sum('nbrmal');
        $guerris= DB::table('stats')->whereDate('date', \Carbon\Carbon::today())->get()->sum('nbrgue');
        $morts = DB::table('stats')->whereDate('date', \Carbon\Carbon::today())->get()->sum('nbrmort');
        $maladestotal =   DB::table('stats')->get()->sum('nbrmal');
        $guerristotal = DB::table('stats')->sum('nbrgue');
        $mortstotal = DB::table('stats')->sum('nbrmort');
        $publications =   DB::table('informations')->orderBy('created_at', 'desc')->limit(3)->get();


        
         return view('welcome',compact('malades','maj','guerris','morts', 'maladestotal', 'guerristotal', 'mortstotal','publications'));
         
    }

   

    


    public function indexinfos()
    {
       $subscribers =   DB::table('citoyens')->get()->sum('id');
        $publications =   DB::table('informations')->whereDate('date', \Carbon\Carbon::today())->get()->count();
        $signals =   DB::table('signals')->where('etat','=', 0)->get()->count();
        $idees =   DB::table('idees')->where('etat', '=', 0)->get()->count();

      

        return view('index', compact('subscribers', 'publications', 'signals', 'idees'));
    }

    public function ideedisplay()
    {
       
        $idees2 = DB::table('idees')
        ->join('categories', 'categories.id', '=', 'idees.cat_id')
        ->join('citoyens', 'citoyens.id', '=', 'idees.cit_id')
        ->where('idees.etat', '=', 1)
        ->orderBy('like','desc')->limit(4)
        ->get();

        $parwilayas = DB::table('stats')
            ->join('wilayas', 'wilayas.id', '=', 'stats.wilaya_id')
            ->whereDate('date', \Carbon\Carbon::today())->get();

        $signals2 = DB::table('signals')
        ->join('categories', 'categories.id', '=', 'signals.cat_id')
        ->join('citoyens', 'citoyens.id', '=', 'signals.cit_id')
            ->join('wilayas', 'wilayas.id', '=', 'signals.wilaya_id')
        ->where('signals.etat', '=', 1)
        ->limit(4)
        ->get();            



        return view('index', compact('idees2', 'parwilayas','signals2'));
    }

    

    // $result = self::select("*", DB::raw('SUM(,nbrmal) as malades') , DB::raw('SUM(,nbrguer) as gueris'), 
    //         DB::raw('SUM(nbrmort) as morts'))
    //         ->groupBy('wilaya_id')
    //         ->get()
    //         ->toArray();


}

//   
