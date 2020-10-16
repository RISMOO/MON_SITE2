<?php

namespace App\Http\Controllers;

use App\Stage;
use App\Message;
use App\Formation;
use App\Framework;
use App\Transport;
use App\Competence;
use App\Experience;
use App\Utilitaire;
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

        $messages=Message::orderBy('created_at','desc')
        ->paginate(1);
        
       
        $competences=Competence::all();
        $utilitaires=Utilitaire::all();
        $frameworks=Framework::all();
        $transports=Transport::all();
        $formations=Formation::all();
        $stages=Stage::all();
        $experiences=Experience::all();

           return view ('accueil.index')->with(['competences'=>$competences,
           'utilitaires'=>$utilitaires,
           'frameworks'=>$frameworks,
            'experiences'=>$experiences,
           'transports'=>$transports,
           'formations'=>$formations,
           'stages'=>$stages,
           'messages'=>$messages

           ]);



        return view('/accueil.index');
    }
}
