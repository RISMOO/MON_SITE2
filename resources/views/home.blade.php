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

<!----------------------MODAL ACCEUIL----------------------------------------------------------------------------------------->

   <div class="modal fade mt-5" id="myHome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
           
          <h3 class="text-warning font-weight-light mb-3">Bonjour <span class="text-danger">{{ucfirst(Auth::user()->name)}}&nbsp;&nbsp;</span>
               <button type="button" class="close text-warning font-weight-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <h4> Bienvenue sur votre dashboard</h4><hr>
                  @if(count($message)>=1)
                  <h6 class="text-center mb-2">Vous avez écrit &nbsp;<strong class="text-primary font-weight-bolder font-size-2rem">{{count($message)}}</strong>&nbsp;&nbsp;message{{ count($message) > 1 ? 's' : "" }}&nbsp;</h6>
             @endif
                </h3>
              </div>
            </div>
         </div>
   </div>
      <!---------------------------------------------FIN MODAL ACCUEIL------------------------------------------------------------------------>
        
          <a href="#"><button type="button" class="btn btn-success mb-3" data-toggle="modal" id="acc" data-target="#mess" ><i class="fas fa-pencil-alt"></i> Ecrire un nouveau message</button></a><br>

     <!-----------------------------------------------------------------------------------FORMULAIRE MESSAGE MODAL--------------->

  <div class="modal fade mt-5" id="mess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <h5 class="modal-title text-warning font-weight-light text-center mt-2 mb-3 " id="exampleModalLongTitle"><i class="fas fa-pencil-alt"></i>&nbsp;Message
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
                           {!! Form::button("<i class='fas fa-paper-plane'></i> Envoyer ",['class'=>'btn btn-success btn-block text-uppercase','value'=>'Envoyer','id'=>'sendMessageButton','type'=>'submit'])!!}
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
                 <div class="container">
                      <table class="table table-striped mt-3">
                        <tr>
                         <th class="text-warning font-weight-light">Messages </th>
                           <th class="text-warning font-weight-light">Editer </th>
                            <th class="text-warning font-weight-light">Supprimer </th>
                          </tr>
                      @foreach ($message as $message)  
                           <tr>
                            <td class="text-success">{{$message->message}}<br>
                             <small class="text-light">{{$message->created_at}}</small></td>
                              <td><a href="/accueil/{{$message->id}}/edit"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Editer</button></a></td>   
                               <td>{!! Form::open(['action'=>['IndexController@destroy',$message->id],'method'=>'POST']) !!}
                                   {{ Form::hidden('_method','DELETE')}}
                                    {{ Form::button('<i class="fas fa-trash-alt"></i> Supprimer',['class'=>'btn btn-danger','type'=>'submit'] )}}
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
                       
   <div class="modal fade mt-5" id="myHome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
           
          <h3 class="text-warning font-weight-light mb-3">Bonjour <span class="text-danger">{{ucfirst(Auth::user()->name)}}&nbsp;&nbsp;</span>
               <button type="button" class="close text-warning font-weight-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                <h4> Bienvenue sur votre dashboard</h4><hr>
                  <h6 class="text-center mb-2">Vous avez écrit &nbsp;<strong class="text-primary font-weight-bolder font-size-2rem">{{count($message)}}</strong>&nbsp;&nbsp;message{{ count($message) > 1 ? 's' : "" }}&nbsp;</h6>

         
                </h3>
              </div>
            </div>
         </div>
   </div>
   <!-------------------------------------------------------FIN MODAL SI AUCUN MESSAGE--------------------------------------->

   <button type="button" class="btn btn-success mb-5" data-toggle="modal" id="ecrire" data-target="#mess" ><i class="fas fa-pencil-alt"></i> Ecrire un message</button><br>
@endif


<!-----------------------------------------------------DEBUT MODAL ECRIRE MESSAGE---------------------------------->       


                        <div class="modal fade mt-5" id="mess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-body">
                                  <h5 class="modal-title text-warning font-weight-light text-center mt-2 mb-3 " id="exampleModalLongTitle"><i class="fas fa-pencil-alt"></i>&nbsp;Message
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
                                                 {!! Form::button("<i class='fas fa-paper-plane'></i> Envoyer ",['class'=>'btn btn-success btn-block text-uppercase','value'=>'Envoyer','id'=>'sendMessageButton','type'=>'submit'])!!}
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                </div>
                      
                                    {!! Form::close()!!}
</body>
                   @endsection
