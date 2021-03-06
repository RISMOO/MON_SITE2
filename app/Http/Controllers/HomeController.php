<?php

namespace App\Http\Controllers;

use App\User;
use App\Stage;
use App\Message;
use App\Formation;
use App\Framework;
use App\Transport;
use App\Competence;
use App\Experience;
use App\Utilitaire;
use App\Divers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
     

        return view ('home')->with('messages', $user->messages);



        
    }

    


    
}
