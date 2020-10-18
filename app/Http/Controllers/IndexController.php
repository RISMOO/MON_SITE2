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
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

  public function __construct()
    {
      
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function index () {
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

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[

            /*nom'=>'alpha|between:3,20|required',*/
           /* 'email'=>'email|required',*/
            'message'=>'between:3,255|required',
       
           


        ]);

        
        $validator = Validator::make($request->all(), [
            /*nom'=>'alpha|between:3,20|required',*/
          /* 'email'=>'email|required',*/
            'message'=>'between:3,255|required',
         
          
            
        ]);

        if ($validator->fails()) {
            return redirect('/accueil#contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        


        $message=new Message;
        $message->nom=auth()->user()->name;
      
        $message->message=$request->input('message');
        $message->published=$request->input('published') ? true : false;
        $message->user_id=auth()->user()->id;
     
       
        //image upload///
        // dd(Storage::url($message->photo));
/* Exemple explode
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
*/


        $message->save();
     



       /* session()->flash( 'message', " Votre message a bien été envoyé et publié !");*/
  if($message->published==true){
 
    return redirect('/accueil') ->with('message',  " Votre message a bien été envoyé et sera publié apres approbation!"); 
  }else{
  
    return redirect('/accueil') ->with('message', " Votre message a bien été envoyé et ne sera pas publié "); 
  }
   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message=Message::find($id);
        return view ('/accueil.show')->with('message', $message);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message=Message::find($id);

        if(auth()->user()->id !== $message->user_id){
          return redirect('/accueil')->with('error','Non autorisé');
        }
        return view ('/accueil.edit')->with('message', $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
               
        $this->validate($request,[

            /*'nom'=>'alpha|between:3,20|required',*/
        /*  'email'=>'email|required',*/
             'message'=>'between:3,255|required',
            
           


        ]);

        
        $validator = Validator::make($request->all(), [
           /* 'nom'=>'alpha|between:3,20|required',*/
           /* 'email'=>'email|required',*/
            'message'=>'between:3,255|required',
          
            
            
        ]);

        if ($validator->fails()) {
            return redirect('/accueil#contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        


        $message= Message::find($id);
       /* $message->nom=trim($request->input('nom'));
      /*  $message->email=$request->input('email');*/
        $message->message=$request->input('message');
   
        $message->published=$request->input('published') ? true : false;
        
       
        //image upload///
        // dd(Storage::url($message->photo));
/* Exemple explode
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
*/


        $message->save();
       /* session()->flash( 'message', " Votre message a bien été envoyé et publié !");*/
  if($message->published==true){
    return redirect('/accueil') ->with('message', " Votre message a bien été modifié et sera publié apres approbation!"); 
  }else{
    return redirect('/accueil') ->with('message', " Votre message a bien été modifié "); 
  }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message= Message::find($id);
        $message->delete();
        if(auth()->user()->id !== $message->user_id){
          return redirect('/accueil')->with('error','Non autorisé');
        }
        return redirect('/accueil') ->with('message', " Votre message a bien été supprimé "); 
    }
}
