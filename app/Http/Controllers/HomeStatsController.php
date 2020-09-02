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
        $malades =   DB::table('stats')->whereDate('created_at', \Carbon\Carbon::today())->get()->sum('nbrmal');
        $guerris= DB::table('stats')->whereDate('created_at', \Carbon\Carbon::today())->get()->sum('nbrgue');
        $morts = DB::table('stats')->whereDate('created_at', \Carbon\Carbon::today())->get()->sum('nbrmort');
        $maladestotal =   DB::table('stats')->get()->sum('nbrmal');
        $guerristotal = DB::table('stats')->sum('nbrgue');
        $mortstotal = DB::table('stats')->sum('nbrmort');
        $publications =   DB::table('informations')->orderBy('created_at', 'desc')->limit(3)->get();
        
        return view('welcome',compact('malades','guerris','morts', 'maladestotal', 'guerristotal', 'mortstotal','publications'));
    }

   
}

//   s
