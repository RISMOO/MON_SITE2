@extends('layouts.app')

@section('content')

<section class="page-section" id="contact">
           
    <div class="container">
        @include('inc.errorsuccess')
     
        <div class="text-center">
            @if (Auth::guest())
            <h2 class="section-heading text-uppercase"id="message" >Contactez-moi</h2>
            <h3 class="section-subheading text-warning">Merci de vous connecter pour laisser un message !</h3>
            
                <!-- Authentication Links -->
           
                
                <div class="d-flex justify-content-center">

                        <a href="{{ route('login') }}"style="text-decoration:overline;" data-toggle="modal" data-target="#logs">Se connecter</a>&nbsp;&nbsp;&nbsp;&nbsp;
                   
                       
                            <a href="{{ route('register') }}"style="text-decoration:overline;"data-toggle="modal" data-target="#reg">S'enregistrer</a>
                    
                </div>
                 @endif
            
            @if (Auth::user())
          
            <h2 class="section-heading text-uppercase"id="message" >Modifier votre message</h2>
              
        
            <p class="text-warning text-right"> * champs obligatoires</p><br>
        </div>
       
        {!! Form::open(['action'=> ['IndexController@update',$message->id],'method'=>'POST']) !!}

        <div class="row contact-form-wrap justify-content-center">

            <div class="col-md-12 contact-fonction form-col">
                <h5 class="font-weight-light text-warning"> {{Form::label('nom','Nom*')}}</h5>
                <h6 class="text-capitalize">{{Form::text('nom',$message->nom,['class'=>'form-control','required','placeholder'=>'votre nom','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</h6>

             </div>


            <div class="col-md-12 contact-fonction form-col">
                <h5 class="font-weight-light text-warning"> {{Form::label('fonction','Fonction *')}}</h5>
                <h6 class="text-capitalize">{{Form::text('fonction',$message->fonction,['class'=>'form-control','required','placeholder'=>'votre fonction','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</h6>

             </div>

               <!--
            <div class="col-lg-12 form-col"
                <h5 class="font-weight-normal">{{Form::label('photo','Photo')}}</h5><br>
               <p class="">{!!Form::file('')!!}</p>
             </div>
             <br>
             -->
            <div class="col-lg-12">
                <h5 class="font-weight-normal text-warning">{{ Form::label('message','Message *')}}</h5>
                <p class="text-capitalize">{{ Form::textarea('message',$message->message,['class'=>'form-control','required','placeholder'=>'Votre message','rows'=>'5','text'=>'capitalize','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</a>
                    <h6 class="font-weight-light text-warning"> {{Form::label('afficher','Cochez, si vous souhaitez afficher votre message sur le site.')}}</h6>
                    <p>{{Form::checkbox('published','1',false,['class'=>'font-weight-bold','border'])}}</p>
                    
            </div>
          
            {{Form::hidden('_method','PUT')}}<!--mettre a jour avec la methode PUT-->
            <h6> {{Form::submit("Modifier votre message",['class'=>' btn btn-outline-success btn-block'])}}</h6>
           
           
           
         
            
        </div>

</div>
</div>

{!! Form::close()!!}
</div>
@endif
    </div>
  
</section>

@endsection