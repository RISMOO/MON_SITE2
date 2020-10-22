
<div class="container">
 
<div class="modal fade mt-5" id="myHome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content0">
<div class="modal-body">

<h3 class="text-warning font-weight-light mb-3">Bonjour <span class="text-danger">{{ucfirst(Auth::user()->name)}}&nbsp;&nbsp;</span>
<button type="button" class="close text-danger font-weight-light" data-dismiss="modal" aria-label="Close" id="afficheButton">
<i class="far fa-times-circle"></i>
</button>

<h4 class="text-light font-weight-light"> Bienvenue sur votre dashboard</h4><hr>
<h6 class="text-center text-light mb-2">Vous avez écrit &nbsp;<strong class="text-primary font-weight-bolder font-size-2rem">{{count($messages)}}</strong>&nbsp;&nbsp;message{{ count($message) > 1 ? 's' : "" }}&nbsp;</h6>


</h3>
</div>
</div>
</div>
</div>
<!-------------------------------------------------------FIN MODAL SI AUCUN MESSAGE--------------------------------------->
<a href="#"><button type="button" class="btn btn-success1 mb-3" data-toggle="modal" id="hide" data-target="#mess" ><i class="fas fa-pencil-alt"></i> Ecrire message</button></a><br>


