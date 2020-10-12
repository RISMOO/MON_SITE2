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

class IndexController extends Controller
{
    public function index () {

        return view ('welcome');

    }

    public function accueil () {
           $messages=Message::orderBy('created_at','desc');
        
       
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



    

    }

 

}
