@extends('layouts.app')

@section('content')
<body class="mast" style="background-image: url('{{ asset('images/tb1.jpg')}}')" >   
<!-- Masthead-->
<header>     
   @if(session('status'))
      <div class="alert alert-success">
       {{session('status')}}
      </div>

   @endif
  </header>

   @if(count($message) > 0 )
      
          <h3 class="text-warning font-weight-light mb-3">Bonjour <span class="text-danger">{{ucfirst(Auth::user()->name)}}</span></h3>
          <a href="#"><button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#mess" >Ecrire un nouveau message</button></a><br>

     <!-----------------------------------------------------------------------------------FORMULAIRE MESSAGE MODAL--------------->

  <div class="modal fade mt-5" id="mess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <h5 class="modal-title text-warning font-weight-light text-center mt-2 mb-3 " id="exampleModalLongTitle">Message
               <button type="button" class="close text-warning font-weight-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </h5>
            {!! Form::open(['action'=> 'IndexController@store','method'=>'POST','enctype'=>"multipart/form-data"]) !!}
            <!--
         <div class="col-lg-12 form-col"
             <h5 class="font-weight-normal">{{Form::label('photo','Photo')}}</h5><br>
            <p class="">{!!Form::file('')!!}</p>
          </div>
          <br>
          -->
        
                     <div class="col-lg-12">
                         <p class="text-capitalize">{{ Form::textarea('message','',['class'=>'form-control','required','placeholder'=>'Votre message','rows'=>'5','text'=>'capitalize','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</a>
                          <h6 class="font-weight-light text-warning"> {{Form::label('afficher','Cochez, si vous souhaitez afficher votre message sur le site.')}}</h6>
                           <p>{{Form::checkbox('published','1',false,['class'=>'font-weight-bold','border'])}}</p>  
                        </div>
                           {!! Form::submit("Envoyer ",['class'=>'btn btn-success btn-block text-uppercase','value'=>'Envoyer','id'=>'sendMessageButton'])!!}
                     </div>
                   </div>
                 </div>
               </div>
             </div>
          </div>

              {!! Form::close()!!}

  <!--------------------------------------------------FIN MODAL MESSAGE------------------------------------------------------------------->

  <!---------------------------------------------------DEBUT MODAL EDIT-------------------------------------------------------------------->
  
<!-----------------------------------------------------FIN MODAL EDIT----------------------------------------------------------------------->
<!------------------------------------------------------HISTORIQUE MESSAGES---------------------------------------------------------------->
                    <h3 class="mt-2 font-weight-light"> Vos messages </h3>
                      <table class="table table-striped">
                        <tr>
                         <th class="text-warning font-weight-light">Messages </th>
                           <th class="text-warning font-weight-light">Editer </th>
                            <th class="text-warning font-weight-light">Supprimer </th>
                          </tr>
                      @foreach ($message as $message)  
                           <tr>
                            <td class="text-success">{{$message->message}}<br>
                             <small class="text-light">{{$message->created_at}}</small></td>
                              <td><a href="/accueil/{{$message->id}}/edit"><button type="button" class="btn btn-info">Editer</button></a></td>   
                               <td>{!! Form::open(['action'=>['IndexController@destroy',$message->id],'method'=>'POST']) !!}
                                   {{ Form::hidden('_method','DELETE')}}
                                    {{ Form::submit('Supprimer',['class'=>'btn btn-danger'] )}}
                                     {!! Form::close() !!}
                                       </td>        
                                      </tr>  
                          @endforeach
                                  </table>
                                 </div>
                                </div>
<!------------------------------------------------------HISTORIQUE MESSAGES----------------------------------->

<!---------------------------------------------------- MODAL ACCEUIL SI AUCUN MESSAGE ----------------------------------->                         
                     @else
                      <div class="container ">
                       
                           <h3 class="text-warning font-weight-light mb-3">Bonjour <span class="text-success font-weight-bold">{{ucfirst(Auth::user()->name)}}</span></h3>
                             <br>
                              <h5 class="text-center mt- mb-5">Vous n'avez aucun message</h5>
                                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#mess" >Ecrire un message</button><br>
                            </div>
                           </div>
                        @endif




<!-----------------------------------------------------DEBUT MODAL ECRIRE MESSAGE---------------------------------->       


                        <div class="modal fade mt-5" id="mess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-body">
                                  <h5 class="modal-title text-warning font-weight-light text-center mt-2 mb-3 " id="exampleModalLongTitle">Message
                                     <button type="button" class="close font-weight-light text-warning" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                      </h5>
                                  {!! Form::open(['action'=> 'IndexController@store','method'=>'POST','enctype'=>"multipart/form-data"]) !!}
                                  <!--
                               <div class="col-lg-12 form-col"
                                   <h5 class="font-weight-normal">{{Form::label('photo','Photo')}}</h5><br>
                                  <p class="">{!!Form::file('')!!}</p>
                                </div>
                                <br>
                                -->
                              
                                           <div class="col-lg-12">
                                               <p class="text-capitalize">{{ Form::textarea('message','',['class'=>'form-control','required','placeholder'=>'Votre message','rows'=>'5','text'=>'capitalize','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</a>
                                                <h6 class="font-weight-light text-warning"> {{Form::label('afficher','Cochez, si vous souhaitez afficher votre message sur le site.')}}</h6>
                                                 <p>{{Form::checkbox('published','1',false,['class'=>'font-weight-bold','border'])}}</p>  
                                              </div>
                                                 {!! Form::submit("Envoyer ",['class'=>'btn btn-success btn-block text-uppercase','value'=>'Envoyer','id'=>'sendMessageButton'])!!}
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                </div>
                      
                                    {!! Form::close()!!}
</body>
                   @endsection
