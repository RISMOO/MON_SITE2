
   <div class="modal fade mt-5" id="myHome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content1">
        <div class="modal-body">

          <h3 class="font-weight-light mb-3">Bonjour <span class="text-warning">{{ucfirst(Auth::user()->name)}}&nbsp;&nbsp;</span>
               <button type="button" class="close text-danger font-weight-light" data-dismiss="modal" id="afficheTab" aria-label="Close">
                <i class="far fa-times-circle"></i>
                  </button></h3>
                  <h4 class="text-light font-weight-light text-warning"> Bienvenue sur votre dashboard</h4><hr>


                  @if(count($messages)>=1)
                  <h6 class="text-center mb-2">Vous avez écrits &nbsp;<strong class="text-primary font-weight-bolder font-size-2rem">{{count($messages)}}</strong>&nbsp;&nbsp;message{{ count($messages) > 1 ? 's' : "" }}&nbsp;</h6>
             @endif
                </h3>
              </div>
            </div>
         </div>
   </div>
