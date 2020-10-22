<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content1">
        <div class="modal-body">
          <h5 class="modal-title text-light"  id="exampleModalLongTitle">{{ucfirst($message->nom)}}
             <button type="button" class="close text-danger text-left font-weight-light" data-dismiss="modal" aria-label="Close" id="voir"><i class="far fa-times-circle"></i>
            
            </button>
           </h5>
         <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
         <p class="text-primary">{{ucfirst($message->message)}}</p>
         <small class="text-light font-weight-light">Ecrit le {{$message->created_at}}</small><br><br>


         
   <!--  <a href="/accueil#contact"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#logs" >Ecrire un message</button></a>-->
    @if (Auth::user())<!--on cache les boutton on utilisateur non inscrit -->
    @if(Auth::user()->id == $message->user_id)<!--on cache aussi les boutton aux noms proprietaire de l'article-->
    <a href="#"><button type="button" class="btn btn-success1 btn-block" style="border:none;" data-toggle="modal" id="cacheEdit" data-target="#edit"><i class="fas fa-edit"></i> Editer votre message</button></a> <br>  
       {!! Form::open(['action'=>['IndexController@destroy',$message->id],'method'=>'POST']) !!}
         {{ Form::hidden('_method','DELETE')}}
           {{ Form::button('<i class="fas fa-trash-alt"></i> Supprimer le message',['class'=>'btn btn-danger btn-block font-weight-normal','type'=>'submit'] )}}
            {!! Form::close() !!}
        @endif
          @endif
       @if (Auth::user())
    @if(Auth::user()->id == $message->user_id)
 @if ($message->published == true)
   <p class="text-warning"> * le message sera publié apres approbation</p>
     @else 
       <p class="text-warning"> * Votre message ne sera pas publié </p>
          @endif
            @endif
              @endif
             </div>
            </div>
          </div>
      
       </div>
    </section>