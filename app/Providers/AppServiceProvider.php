<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use View;
use App\Stat;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $maj =   DB::table('stats')->orderBy('id', 'desc')->value('created_at');
        $maladestotal =   Stat::all()->sum('nbrgue');
        $guerristotal = DB::table('stats')->sum('nbrgue');
        $mortstotal = DB::table('stats')->sum('nbrmort');
        $malades =   DB::table('stats')->whereDate('date', \Carbon\Carbon::today())->get()->sum('nbrmal');
        $morts = DB::table('stats')->whereDate('date', \Carbon\Carbon::today())->get()->sum('nbrmort');
        $guerris = DB::table('stats')->whereDate('date', \Carbon\Carbon::today())->get()->sum('nbrgue');
        $idee = DB::table('idees')->where('etat', '=', 1)->orderBy('created_at', 'desc')->get();
        $subscribers =   DB::table('citoyens')->get()->sum('id');
        $publications =   DB::table('informations')->whereDate('date', \Carbon\Carbon::today())->get()->count();
        $signals =   DB::table('signals')->where('etat', '=', 0)->get()->count();
        $idees =   DB::table('idees')->where('etat', '=', 0)->get()->count();
        $idees1 =   DB::table('idees')->where('etat', '=', 1)->get()->count();
        $signals1 =   DB::table('signals')->where('etat', '=', 1)->get()->count();
        $categories = DB::table('categories')->get();
        $messagesnonluscount =   DB::table('messages')->where('is_read', '=', 0)->get()->count();
        $communes = DB::table('communes')->get();
        $professions = DB::table('professions')->get();
        $tags = DB::table('tags')->get();
        $users = DB::table('citoyens')->get();
        $notifications = $messagesnonluscount + $signals + $idees; 

        View::share('maladestotal', $maladestotal);
        View::share('guerristotal', $guerristotal);
        View::share('mortstotal', $mortstotal);
        View::share('malades', $malades);
        View::share('maj', $maj);
        View::share('guerris', $guerris);
        View::share('morts', $morts);
        View::share('idee', $idee);
        View::share('subscribers', $subscribers);
        View::share('publications', $publications);
        View::share('signals', $signals);
        View::share('idees', $idees);
        View::share('idees1', $idees1);
        View::share('signals1', $signals1);
        View::share('categories', $categories);
        View::share('communes', $communes);
        View::share('professions', $professions);
        View::share('tags', $tags);
        View::share('messagesnonluscount', $messagesnonluscount);
        View::share('users', $users);
        View::share('notifications', $notifications);

        
              Schema::defaultStringLength(191);
    }
}
