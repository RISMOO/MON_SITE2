@extends('layouts.app')

@section('content')

<section class="page-section" id="contact">


    @include('inc.errorsuccess')
         
    @if(session()->has('message'))
    <div class="alert alert-success text-center border" role="alert">
    {{session()->get('message')}}
    </div>
   @endif
    <div class="container">
     
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

               <!--
            <div class="col-lg-12 form-col"
                <h5 class="font-weight-normal">{{Form::label('photo','Photo')}}</h5><br>
               <p class="">{!!Form::file('')!!}</p>
             </div>
             <br>
             -->
            <div class="col-lg-12">
                <h5 class="font-weight-normal text-warning">{{ Form::label('message','Message *')}}</h5>
                <p class="text-capitalize">{{ Form::textarea('message',$message->message,['class'=>'form-control','placeholder'=>'Votre message','rows'=>'5','text'=>'capitalize','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</a>
                    <h6 class="font-weight-light text-warning"> {{Form::label('afficher','Cochez, si vous souhaitez afficher votre message sur le site.')}}</h6>
                    <p>{{Form::checkbox('published',$message->published,['class'=>'font-weight-bold'])}}</p>
                    
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

<div class="modal fade mt-5" id="logs" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h3 class="text-dark">S'indentifier </h3>
     
        </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="form-group text-dark">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Entrez votre email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

            </div>
            <div class="form-group text-dark">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
        
              <input id="password" type="password" minlength="8" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Entrez votre mot de passe" required autocomplete="current-password" autofocus>
              
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}autofocus >

                <label class="form-check-label text-dark" for="remember">
                    Se souvenir de moi
                </label>
            </div><br>
              <button type="submit" class="btn btn-success btn-block"><i class="fa fa-power-off"></i> Se connecter</button>
          </form>
        </div>
        @if (Route::has('password.request'))
        <a class="btn btn-link text-danger" href="{{ route('password.request') }}">
            {{ __('Mot de passe oublié ?') }}
        </a>
    @endif
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
         
        
      
      </div>
    </form>
      
    </div>
  </div> 

<section>

    <div class="modal fade mt-5" id="reg" role="dialog">
  
        <div class="modal-dialog">
    
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">

                    <h3 class="text-dark">S'enregistrer</h3>
                
              </div>
              <div class="modal-body" style="padding:40px 50px;">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-group text-dark">
                        <label for="name"><span class="glyphicon glyphicon-user"></span>Nom</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Entrez votre Nom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>

                      <div class="form-group text-dark">
                        <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Entrez votre email" value="{{ old('email') }}" required autocomplete="email"autofocus >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
  
                      </div>

                      <div class="form-group text-dark">
                        <label for="password"><span class="glyphicon glyphicon-user"></span>Password</label>
                        <input id="password" type="password" minlength="8" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Entrez votre mot de passe"  required autocomplete="new-password" autofocus>
                       
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                      <div class="form-group text-dark">
                        <label for="password-confirm"><span class="glyphicon glyphicon-user"> Confirmer </label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmer votre mot de passe" required autocomplete="new-password"autofocus>
                        </div>
                        <button type="submit" minlength="8" class="btn btn-success btn-block"><i class="fa fa-power-off"></i> S'enregistrer</button>
                    
                  </div>
                 
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>

                           
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection