  
 @foreach($messages as $message)
 <div class="modal fade mt-3 " id="edit{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content1">
      <div class="modal-body">
         <h5 class="modal-title text-light text-center font-weight-light mt-2 mb-5 " id="exampleModalLongTitle"><i class="fas fa-pencil-alt"></i>&nbsp;Editer 

          <button type="button" class="close text-danger font-weight-light" data-dismiss="modal" id="openEdit" aria-label="Close">
           <i class="far fa-times-circle"></i>
           </button>
           <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
     {!! Form::open(['action'=> ['IndexController@update',$message->id],'method'=>'POST']) !!}
        <!--
       <div class="col-lg-12 form-col"
         <h5 class="font-weight-normal">{{Form::label('photo','Photo')}}</h5><br>
           <p class="">{!!Form::file('')!!}</p>
          </div>
           <br>
             -->
   <div class="col-lg-12">
      <p class="text-capitalize">{{ Form::textarea('message',$message->message,['class'=>'form-control','placeholder'=>'Votre message','rows'=>'5','text'=>'capitalize','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</a>
         
      </div>
      <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
        {{Form::hidden('_method','PUT')}}<!--mettre a jour avec la methode PUT-->
      <h6> {{Form::button("<i class='fas fa-edit'></i> Modifier votre message",['class'=>' btn btn-success1 btn-block','type'=>'submit'])}}</h6>
   </div>
          </div>
         </div>
       </div>
   
   {!! Form::close()!!}

 @endforeach