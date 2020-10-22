
                        <div class="modal fade mt-5" id="mess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content1">
                                <div class="modal-body">
                                    <h5 class="modal-title text-light font-weight-light text-center mt-2 mb-3 " id="exampleModalLongTitle"><i class="fas fa-pencil-alt"></i>&nbsp;Message
                                       <button type="button" class="close font-weight-light text-danger" data-dismiss="modal" aria-label="Close">
                                         
                                        <i class="far fa-times-circle"></i>
                                          </button>
                                        
                                        <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                                    {!! Form::open(['action'=> 'IndexController@store','method'=>'POST','enctype'=>"multipart/form-data"]) !!}
                                    <!--
                                 <div class="col-lg-12 form-col"
                                     <h5 class="font-weight-normal">{{Form::label('photo','Photo')}}</h5><br>
                                    <p class="">{!!Form::file('')!!}</p>
                                  </div>
                                  <br>
                                  -->
                                  
                                             <div class="col-lg-12">
  
                                                 <p class="text-capitalize">{{ Form::textarea('message','',['class'=>'form-control','required','placeholder'=>'Votre message','rows'=>'5','text'=>'capitalize','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</a>
                                                  <h6 class="font-weight-light text-danger"> {{Form::label('afficher','Cochez, si vous souhaitez afficher votre message sur le site.')}}</h6>
                                                   <p>{{Form::checkbox('published','1',false,['class'=>'font-weight-bold','border'])}}</p>  
                                                </div>
                                                <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                                                   {!! Form::button("<i class='fas fa-paper-plane'></i> Envoyer ",['class'=>'btn btn-success1 btn-block text-uppercase','value'=>'Envoyer','id'=>'sendMessageButton','type'=>'submit'])!!}
                                             </div>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                  </div>
                        
                                      {!! Form::close()!!}