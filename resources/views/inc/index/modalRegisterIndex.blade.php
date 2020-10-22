<section>
    <div class="modal fade mt-5" id="reg" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content1">
              <div class="modal-header">
                 <h3 class="text-light">S'enregistrer</h3>
              </div>
              <div class="modal-body" style="padding:40px 50px;">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group text-dark text-left">
                        <label for="name" class="text-light font-weight-bold">Nom</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Entrez votre Nom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                      <div class="form-group text-light text-left">
                        <label for="email" class="text-light font-weight-bold">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Entrez votre email" value="{{ old('email') }}" required autocomplete="email"autofocus >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                      <div class="form-group text-light  text-left">
                        <label for="password" class="text-light font-weight-bold" >Password</label>
                        <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Entrez votre mot de passe"  required autocomplete="new-password" autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                      <div class="form-group text-light text-left">
                        <label for="password-confirm" class="text-light font-weight-bold" >Confirmer </label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmer votre mot de passe" required autocomplete="new-password"autofocus><br>
                        </div>
                        <button type="submit"  class="btn btn-success1  btn-block"><i class="fa fa-power-off"></i> S'enregistrer</button>
                      </div>
                    <button type="submit" class="btn btn-danger btn-block pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>