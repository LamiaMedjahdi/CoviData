<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DisplayPublicationController extends Controller
{
    public function Publications()
    {
        $allposts= DB::table('informations')->get();
        $postscondition= DB::table('informations')->limit(1)->get();
        
        
        return view('publications', compact('allposts','postscondition'));
    }
}
