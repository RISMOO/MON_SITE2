@extends('layouts.app')
@section('content')



  
  <!-- Modal -->
  <div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <img class="mx-auto rounded-circle" id =guest src="{{asset('images/thank.png')}}" alt="" />
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">{{ucfirst($message->nom)}}</h5>
          <p class="text-muted">{{ucfirst($message->fonction)}}</p>
          <small>Ecrit le {{$message->created_at}}</small>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        </div>
      </div>
    </div>
  </div>








<header class="masthead" style="background-image: url('{{ asset('images/tree.jpg')}}')" id="fond1" >
            
    <div class="ap1">
        
        
        <div class="container">
         
            <div class="jumbotron">
                <img class="mx-auto rounded-circle" id =guest src="{{asset('images/thank.png')}}" alt="" />
                <h4 class="text-success">{{ucfirst($message->nom)}}</h4>
                <p class="text-muted">{{ucfirst($message->fonction)}}</p>
                <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                <p class="">{{ucfirst($message->message)}}</p>
                <small>Ecrit le {{$message->created_at}}</small>
                <hr>
               
        
        </div>
        </div>
  
    <!-- Trigger the modal with a button -->
 
   </div>


</header>
@endsection