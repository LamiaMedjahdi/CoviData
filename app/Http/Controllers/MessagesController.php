<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    //sendmessagetoadmin
    public function sendmessagetoadmin(Request $request)
    {

        // $this->validate(request(),[
        //     'title' => 'required|max:50|string',
        //     'content' => 'required|min:20|string',
        //      'image' => 'image|mimes:jpg,jpeg,png|max:2048',
        // ]);
        if (Auth::check())
        {
            $message = new Message;
            $message->contenu = $request->message;
            $message->objet = $request->objet;
            $message->sender_id = $request->userid;
            $message->is_read = '0';
            $message->to_id = '1';
            $message->created_at = NOW();
            $message->updated_at = NOW();
            $message->save();
            return redirect("/contact")->with('message', 'Votre message a bien été envoyé');
        }
        else return redirect("/login")->with('message', 'Connectez vous pour pouvoir envoyer des messages aux administrateurs');

    }

public function sendmessagetouser(Request $request)
    {

        $this->validate(request(),[
            'message' => 'required|max:50|string',
       ]);

        if (Auth::check())
        {
            $message = new Message;
            $message->sender_id = $request->senderid;
            $message->to_id = $request->userid;
            $message->objet = 'Message de la part de l administrateur';
            $message->contenu = $request->message;
            $message->is_read = '0';
            $message->created_at = NOW();
            $message->updated_at = NOW();
            $message->save();
            return redirect("/contact")->with('message', 'Votre message a bien été envoyé');
        }
        else return redirect("/login")->with('message', 'Connectez vous pour pouvoir envoyer des messages aux administrateurs');

    }
    
  public function displaymessage()
    {
        
            if (Auth::check() AND Auth::user()->roles==1) {
                $messagesnonlus = DB::table('messages')->select('messages.sender_id', 'messages.id', 'messages.objet', 'messages.contenu', 'messages.created_at','citoyens.nom', 'citoyens.prenom')
                    ->join('citoyens', 'citoyens.id', '=', 'messages.sender_id')
                    ->where('messages.is_read','=','0')->where('messages.to_id','=','1')->get();
            $messageslus = DB::table('messages')->select('messages.sender_id', 'messages.id', 'messages.objet', 'messages.contenu', 'messages.created_at', 'citoyens.nom', 'citoyens.prenom')
            ->join('citoyens', 'citoyens.id', '=', 'messages.sender_id')
            ->where('is_read', '=', '1')->where('to_id', '=', '1')->get();  
            } 
            elseif (Auth::check() and Auth::user()->roles == 0)
            {
                $messagesnonlus = DB::table('messages')->select('messages.sender_id', 'messages.id', 'messages.objet', 'messages.contenu', 'messages.created_at', 'citoyens.nom', 'citoyens.prenom')
                ->join('citoyens', 'citoyens.id', '=', 'messages.sender_id')
                ->where('messages.is_read', '=', '0')->where('messages.to_id',Auth::user()->id)->get();
            $messageslus = DB::table('messages')->select('messages.sender_id', 'messages.id', 'messages.objet', 'messages.contenu', 'messages.created_at', 'citoyens.nom', 'citoyens.prenom')
            ->join('citoyens', 'citoyens.id', '=', 'messages.sender_id')
            ->where('is_read', '=', '1')->where('to_id', Auth::user()->id)->get();
            }
        

       
        
        return view('messages', compact('messagesnonlus', 'messageslus'));
    }

    public function find($id)
    {

        if (Auth::check() and Auth::user()->roles == 1) {
            $iduser=$id;
            return view('/envoyer-message', compact('iduser'));
          
        } else return redirect("/index");
 }


    public function displaymessagebyid($id)
    {
        if (Auth::check()and Auth::user()->roles == 1) {
            $messagesnonlus = DB::table('messages')
            ->where('to_id', '=' , '1')->find($id);
            $citoyensmessage = DB::table('citoyens')
            ->find($messagesnonlus->sender_id);
            $query = DB::table('messages')
            ->where('id', $id)
            ->update(['is_read' => "1"]);
        } elseif (Auth::check() and Auth::user()->roles == 0) {
            $messagesnonlus = DB::table('messages')
            ->where('to_id', Auth::user()->id)->find($id);
            $citoyensmessage = DB::table('citoyens')
            ->find($messagesnonlus->sender_id);
            $query = DB::table('messages')
            ->where('id', $id)
            ->update(['is_read' => "1"]);
        }

        if ($messagesnonlus) return view('message', compact('messagesnonlus', 'citoyensmessage'));
        else return redirect("/index");
    }


}
