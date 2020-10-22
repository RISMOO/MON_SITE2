
                    <div class="col-lg-4">
                        <div class="team-member">
                             <img class="mx-auto rounded-circle" id =guest src="{{asset('images/merci.jpg')}}" alt="" />
                              <h4>{{ucfirst($message->nom)}}</h4>
                            <p class="text-muted">{{ucfirst($message->fonction)}}</p>
                            <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                          
                            <a href="/accueil/{{$message->id}}"data-toggle="modal" data-target="#show" class="mb-3"><i class="fas fa-book-reader"></i> Lire la suite...</a>
                            <br>
                        @if(Auth::guest())
                            <button type="button" class="btn btn-success1 mt-3" data-toggle="modal" data-target="#logs" style="display:none;" id="boutonEcrireMessage" ><i class="fas fa-pencil-alt"></i> Ecrire un message</button>
                        @else
                            <button type="button" class="btn btn-success1 mt-3" data-toggle="modal" data-target="#mess" ><i class="fas fa-pencil-alt"></i> Ecrire un message</button>
                        @endif