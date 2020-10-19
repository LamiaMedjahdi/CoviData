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




    public function map()
    {
       $test='100';
        $adrar =   DB::table('stats')->where('wilaya_id', '1')->sum('nbrmal');
        $chlef =   DB::table('stats')->where('wilaya_id', '2')->sum('nbrmal');
        $laghouat =   DB::table('stats')->where('wilaya_id', '3')->sum('nbrmal');
        $oumbouagui =   DB::table('stats')->where('wilaya_id', '4')->sum('nbrmal');
        $batna =   DB::table('stats')->where('wilaya_id', '5')->sum('nbrmal');
        $bedjaia =   DB::table('stats')->where('wilaya_id', '6')->sum('nbrmal');
        $biskra =   DB::table('stats')->where('wilaya_id', '7')->sum('nbrmal');
        $bechar =   DB::table('stats')->where('wilaya_id', '8')->sum('nbrmal');
        $blida =   DB::table('stats')->where('wilaya_id', '9')->sum('nbrmal');
        $bouira =   DB::table('stats')->where('wilaya_id', '10')->sum('nbrmal');
        $tamnrasset =   DB::table('stats')->where('wilaya_id', '11')->sum('nbrmal');
        $tebessa =   DB::table('stats')->where('wilaya_id', '12')->sum('nbrmal');
        $tlemcen =   DB::table('stats')->where('wilaya_id', '13')->sum('nbrmal');
        $tiaret =   DB::table('stats')->where('wilaya_id', '14')->sum('nbrmal');
        $tizi =   DB::table('stats')->where('wilaya_id', '15')->sum('nbrmal');
        $alger =   DB::table('stats')->where('wilaya_id', '16')->sum('nbrmal');
        $djelfa =   DB::table('stats')->where('wilaya_id', '17')->sum('nbrmal');
        $jijel =   DB::table('stats')->where('wilaya_id', '18')->sum('nbrmal');
        $setif =   DB::table('stats')->where('wilaya_id', '19')->sum('nbrmal');
        $saida =   DB::table('stats')->where('wilaya_id', '20')->sum('nbrmal');
        $skikda =   DB::table('stats')->where('wilaya_id', '21')->sum('nbrmal');
        $sba =   DB::table('stats')->where('wilaya_id', '22')->sum('nbrmal');
        $annaba =   DB::table('stats')->where('wilaya_id', '23')->sum('nbrmal');
        $guelma =   DB::table('stats')->where('wilaya_id', '24')->sum('nbrmal');
        $constantine =   DB::table('stats')->where('wilaya_id', '25')->sum('nbrmal');
        $medea =   DB::table('stats')->where('wilaya_id', '26')->sum('nbrmal');
        $mosta =   DB::table('stats')->where('wilaya_id', '27')->sum('nbrmal');
        $msila =   DB::table('stats')->where('wilaya_id', '28')->sum('nbrmal');
        $mascara =   DB::table('stats')->where('wilaya_id', '29')->sum('nbrmal');
        $ourgla =   DB::table('stats')->where('wilaya_id', '30')->sum('nbrmal');
        $oran =   DB::table('stats')->where('wilaya_id', '31')->sum('nbrmal');
        $lbayadh =   DB::table('stats')->where('wilaya_id', '32')->sum('nbrmal');
        $illizi =   DB::table('stats')->where('wilaya_id', '33')->sum('nbrmal');
        $bba =   DB::table('stats')->where('wilaya_id', '34')->sum('nbrmal');
        $boumerdes =   DB::table('stats')->where('wilaya_id', '35')->sum('nbrmal');
        $taref =   DB::table('stats')->where('wilaya_id', '36')->sum('nbrmal');
        $tindouf =   DB::table('stats')->where('wilaya_id', '37')->sum('nbrmal');
        $tissemsilt =   DB::table('stats')->where('wilaya_id', '38')->sum('nbrmal');
        $loued =   DB::table('stats')->where('wilaya_id', '39')->sum('nbrmal');
        $khenchela =   DB::table('stats')->where('wilaya_id', '40')->sum('nbrmal');
        $soukahras =   DB::table('stats')->where('wilaya_id', '41')->sum('nbrmal');
        $tipaza =   DB::table('stats')->where('wilaya_id', '42')->sum('nbrmal');
        $mila =   DB::table('stats')->where('wilaya_id', '43')->sum('nbrmal');
        $aindefla =   DB::table('stats')->where('wilaya_id', '44')->sum('nbrmal');
        $naama =   DB::table('stats')->where('wilaya_id', '45')->sum('nbrmal');
        $temouchent =   DB::table('stats')->where('wilaya_id', '46')->sum('nbrmal');
        $ghardaia =   DB::table('stats')->where('wilaya_id', '47')->sum('nbrmal');
        $relizane =   DB::table('stats')->where('wilaya_id', '48')->sum('nbrmal');




        return view('welcome', compact('adrar','chlef','laghouat','oumbouagui','batna','bedjaia','biskra','bechar','blida','bouira','tamnrasset','tebessa','tlemcen','tiaret','tizi','alger','djelfa','jijel','setif','saida','skikda','sba','annaba','guelma','constantine','medea','mosta','msila','mascara','ourgla','oran','lbayadh','illizi','bba','boumerdes','taref','tindouf','tissemsilt','loued','khenchela','soukahras','tipaza', 'adrar','mila','aindefla','naama','temouchent','ghardaia','relizane'));
    }

   

    


    public function indexinfosadmin()
    {
       $subscribers =   DB::table('citoyens')->get()->count('id');
        $publications =   DB::table('informations')->whereDate('date', \Carbon\Carbon::today())->get()->count();
        $signals =   DB::table('signals')->where('etat','=', 0)->get()->count();
        $idees =   DB::table('idees')->where('etat', '=', 0)->get()->count();

        $idees2 = DB::table('idees')
            ->join('categories', 'categories.id', '=', 'idees.cat_id')
            ->join('citoyens', 'citoyens.id', '=', 'idees.cit_id')
            ->where('idees.etat', '=', 1)
            ->limit(4)
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

      

        return view('index', compact('subscribers', 'publications', 'signals', 'idees', 'idees2', 'parwilayas', 'signals2'));
    }



    

    // $result = self::select("*", DB::raw('SUM(,nbrmal) as malades') , DB::raw('SUM(,nbrguer) as gueris'), 
    //         DB::raw('SUM(nbrmort) as morts'))
    //         ->groupBy('wilaya_id')
    //         ->get()
    //         ->toArray();


}

//   
