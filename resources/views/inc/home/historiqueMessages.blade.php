<div class="container"  style="display:none;" id="tab" >
    <a href="#"><button type="button" class="btn btn-success1 mb-3" data-toggle="modal" id="hide" data-target="#mess" ><i class="fas fa-pencil-alt"></i> Ecrire un nouveau message</button></a><br>
      <table class="table table-striped mt-3">
        <tr>
         <th class="text-warning font-weight-light">Messages </th>
           <th class="text-warning font-weight-light">Editer </th>
            <th class="text-warning font-weight-light">Supprimer </th>
          </tr>
      @foreach ($messages as $message)
           <tr>
            <td class="text-success">{{$message->message}}<br>
             <small class="text-light">{{$message->created_at}}</small></td>
              <td><button type="button" class="btn btn-info" id="voirEdit{{$message->id}}"><i class="fas fa-edit"></i> Editer</button></td>
               <td>{!! Form::open(['action'=>['IndexController@destroy',$message->id],'method'=>'POST']) !!}
                   {{ Form::hidden('_method','DELETE')}}
                    {{ Form::button('<i class="fas fa-trash-alt"></i> Supprimer',['class'=>'btn btn-danger','type'=>'submit'] )}}
                     {!! Form::close() !!}
                       </td>
                      </tr>
                      @endforeach
                     </table>
                    </div>
         
