<section>
    <div class="modal fade mt-5" id="logs" role="dialog">
       <div class="modal-dialog">
         <div class="modal-content1">
           <div class="modal-header">
             
             <h3 class="text-light text-center mt-3">S'indentifier </h3>
           </div>
           <div class="modal-body" style="padding:40px 50px;">
               <form method="POST" action="{{ route('login') }}">
                   @csrf
               <div class="form-group text-light text-left">
                 <label for="email" class="font-weight-bold
                 "> Email</label>
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Entrez votre email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                 @error('email')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
               </div>
               <div class="form-group text-light text-left font-weight-bold">
                 <label for="psw" class="">Mot de passe</label>
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Entrez votre mot de passe" required autocomplete="current-password" autofocus>
               </div>
               <div class="form-check">
                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}autofocus >
                   <label class="form-check-label text-light" for="remember">
                       Se souvenir de moi
                   </label>
               </div><br>
                 <button type="submit" class="btn btn-success1 btn-block" data-toggle="modal" data-target="#profil" ><i class="fa fa-power-off"></i> Se connecter</button>
             </form>
           </div>
         
           @if (Route::has('password.request'))
           <a class="btn btn-link font-weight-normal text-danger" href="{{ route('password.request') }}">
               {{ __('Mot de passe oublié ?') }}
           </a><br>
       @endif
             <button type="submit" class="btn btn-danger btn-block pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
          </div>
         </form>
        </div>
       </div> 
   </section>

   