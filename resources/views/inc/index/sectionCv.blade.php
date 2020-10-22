
        <section class="page-section" id="cv">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"> CV</h2>
                    <h3 class="section-subheading text-muted">Mon curriculum</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"id="competences">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-code fa-3x fa-stack-1x fa-inverse"></i>
                         </div>
                        
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                        
                                <h4>COMPETENCES</h4>
                             
                             
                            </div>
                            <div id="competencebar" style="display:none;">
                         
                            @foreach ($competences as $competence)
                            {{$competence->nom}}
                                <div class="progress"id="competencebar"> 
                                   <div class="progress-bar" role="progressbar" aria-valuenow="{{$competence->lien}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$competence->pourcentage}}%">
                                        </div>  
                                    </div>
                                    @endforeach
                          
                               <br>
                                    <h5 class="subheading">Softwares</h5>
                                @foreach ($utilitaires as $utilitaire)
                                {{$utilitaire->nom}}
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$utilitaire->lien}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$utilitaire->pourcentage}}%">
                                            </div>  
                                        </div>
                                    @endforeach
                                    <br>
                          

                          <h5 class="subheading">Frameworks</h5>
                          @foreach ($frameworks as $framework)
                          {{$framework->nom}}
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$framework->lien}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$framework->pourcentage}}%">
                                      </div>  
                                  </div>
                              @endforeach
                    </div>
                        </div>
                      
                    </li>
                    <li class="timeline-inverted">
                      
                        <div class="timeline-image" id="formations">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-graduation-cap fa-3x fa-stack-1x fa-inverse"></i>
                         </div>
                        <div class="timeline-panel">

                     <div class="timeline-heading">
                      <h4> FORMATIONS</h4>
                      <div id="forma1" style="display:none">
                      <span class="ui-icon ui-icon-arrowthick-1-n"></span>
                     
                      <div id="formation1" style="display:block">
                        <span class="ui-icon ui-icon-arrowthick-1-n"></span>
                      @foreach ($formations as $formation)
                                
                                <h5 class="subheading">{{$formation->nom}}</h5>
                           
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="{{$formation->lieu}}" class="text-success">Afpa de brest</a></li>
                                    <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$formation->date}}</li>
                                
                                    <li class="list-group-item"><i class="fa fa-play-circle"></i>&nbsp;<a href="{{$formation->image}}" class="text-success">Voir le titre</a></li>
                                  </ul>
                                  @endforeach
                      
                               
                                  @foreach ($autos as $auto)
                                  <h4>AUTO FORMATION</h4>
                                <h5 class="subheading">{{$auto->nom}}</h5>
                              
                               
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="{{$auto->lieu}}" class="text-success">Udemy</a></li>
                                    <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$auto->date}}</li>
                                        
                                        <li class="list-group-item"><i class="fa fa-play-circle"></i>&nbsp;<a href="{{$auto->image}}" class="text-success">Voir le titre</a></li>
                                      </ul>
                                  </div>
                      
                      @endforeach  
                    </li>
                  <li>
                    
                        <div class="timeline-image" id="expe">
                        
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-3x fa-stack-1x fa-inverse"></i>
                        
                        </div>
                       
                        <div class="timeline-panel">
                            <div class="timeline-heading">

                                <h4>EXPERIENCES</h4>
                            <div id="expe1" style="display:none">
                                @foreach($stages as $stage)
                            <h5 class="subheading">{{$stage->nom}}</h5>
                           
                            <div class="timeline-body">
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="{{$stage->lieu}}"class="text-success">IMT-Atlantique</a></li>
                                    <li class="list-group-item"><i class="fa fa-file-code"></i>&nbsp;&nbsp;<a href="{{$stage->projet}}"class="text-success">Application de gestions des demandes de ressources</a></li>
                                    <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$stage->date}}</li>
                                    <li class="list-group-item"><i class="fas fa-user-cog"></i>&nbsp;&nbsp;{{$stage->referend}}</li>
                                </ul>
                            </div><br>
                            @endforeach

                            <h5 class="subheading">Transport</h5>
                            @foreach($transports as $transport)
                            <div class="timeline-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;{{$transport->ets}}</li>
                                    <li class="list-group-item"><i class="fas fa-truck"></i>&nbsp;&nbsp;{{$transport->poste}}</li>
                                <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$transport->date}}</li>
                                  </ul>

                            </div><br>
                            @endforeach
                            <div class="timeline-heading">
                                <h4>Divers</h4>
                                @foreach($autres as $autre)
                                <h5 class="subheading">{{$autre->nom}}</h5>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="{{$autre->lieu}}"class="text-success">2éme RCS VERSAILLES SATORY</a></li>
                                <li class="list-group-item"><i class="far fa-user"></i>&nbsp;&nbsp;{{$autre->fonction}}</li>
                                <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$autre->date}}</li>
                                    <li class="list-group-item"><i class="fa fa-play-circle"></i></i>&nbsp;<a href="{{asset('images/rcs.png')}}"class="text-success">Voir le certificat</a></li>
                                 </ul>
                            </div>
                            @endforeach
                        </div>
                      </li>
                    <li class="timeline-inverted" id="softskills">
                        <div class="timeline-image"id="soft">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-magic fa-3x fa-stack-1x fa-inverse"></i>
                          </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>SOFTSKILLS</h4>
                                <div id="carousel" class="carousel slide" data-ride="carousel" style="display:none;">
                                    <ol class="carousel-indicators">
                                      <li data-target=".carousel" data-slide-to="0" class="active"></li>
                                      <li data-target=".carousel" data-slide-to="1"></li>
                                      <li data-target=".carousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('images/curieux.jpg')}}" alt="Un tigre">
                                         <div class="carousel-caption">
                                          </div>
                                           <h3 class="text-muted">Curieux</h3>
                                        </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/never.jpg')}}" alt="Un tigre">
                                          <div class="carousel-caption">
                                        </div>
                                        <h3 class="text-muted">Perseverant</h3>
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/audacieux.jpg')}}" alt="Un tigre">
                                   <div class="carousel-caption">  
                                    </div>
                                        <h3 class="text-muted">Audacieux</h3>
                                      </div>  
                                  </div>
                                    <a class="carousel-control-prev" href="#carousel" data-slide="prev">
                                      <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel" data-slide="next">
                                      <span class="carousel-control-next-icon"></span>
                                    </a> 
                                  </div>
                               </div>
                        </div>
                            </li>
                            @foreach($cvs as $cv)
                          <li class="timeline-inverted">
                        <a target="_blank" href="{{$cv->image}}">
                        <div class="timeline-image">
                            <h5 class="mt-3">
                                {{$cv->nom}}<br>
                                <i class="fa fa-download fa-2x"></i>
                             </h5>
                    </div>
               </a>
              </li>
              @endforeach
             </ul>
            </div>
          </section>