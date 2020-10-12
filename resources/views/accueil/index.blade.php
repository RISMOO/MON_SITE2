


@extends('layouts.app')



@section('content')

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger text-success" href="/"><i class="fa fa-power-off"></i></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        
                        <li class="nav-item"><a class="js-scroll-trigger font-weight-normal text-success" href="#page-top"><i class="fa fa-home fa-2x"></i></a>
                        <li class="nav-item"><a class="js-scroll-trigger font-weight-normal text-success" href="#services">A propos</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger font-weight-normal text-success" href="#portfolio">Projets</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger font-weight-normal text-success" href="#cv">CV</a></li>
                        <li class="nav-item"><a class="js-scroll-trigger font-weight-normal text-success" href="#portfolio2">Syntheses</a></li>
                        
                        <li class="nav-item"><a class="js-scroll-trigger font-weight-bold text-success" href="#contact"><i class="fa fa-envelope fa-2x"></i></a>
                    </ul>
                </div>
            </div>
        </nav>
       
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('{{ asset('images/tree.jpg')}}')" id="fond" >
            
            <div class="ap">
                
                   
                    <div class="button_cont"align="center" id="services"><a class="example_d" id="myBtn"  target="_blank" rel="nofollow noopener"><i class="fa fa-angle-double-right"></i> A propos de moi <i class="fa fa-angle-double-left"></i></a></div>
          
            <!-- Trigger the modal with a button -->
         
           </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                <a href="/accueil"><img class="rounded-circle mb-5" src="{{asset('images/moiprofil.jpg')}}"id="moiprofil" alt="avatar" /></a><br>
                <!-- Modal content-->
                <div class="modal-content">
             
                  <div class="modal-body" style="padding:40px 50px;">
                    <h4 class="text-muted">Bonjour</h4>
                    <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                    <p class="text-muted">Je m'appelle <strong>Maurice</strong>, j'ai 46ans, j'ai travaillé pendant 20 ans dans le transport.J'ai souhaité donné un tournant a ma carriere professionnel.<br>
                        En effet toujours passionéé par le monde du numérique et plus particulierement le Web j'ai suivi une formation de developpeur Web a <a href="https://www.afpa.fr/formation-qualifiante/developpeur-logiciel" class="text-success"> l'Afpa de Brest</a>.Cette formation a eu lieu en presentiel et ( cause crise sanitaire ) en autonomie complete ,stage compris.A l'issue j'ai obtenu le titre de developpeur web et web mobile.Je m'autoforme en permanence.<br>Vous trouverez sur ce site toutes mes creations.Vos remarques seront les bienvenues en me laissant un<a href="#message"> Message</a>  </p>
                   
                   
                        <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                
                    <button type="submit" class="btn btn-danger btn-default pull-center" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>
                  
                  </div>
                 
                </div>
                
              </div>
            </div> 
         
                <!-- Trigger the modal with a button -->
              

               
              
    
                
             
            
        </header><!--si j'ai un message-->
      
       
         
        @if(session()->has('message'))
        <div class="alert alert-success text-center border" role="alert">
        {{session()->get('message')}}
        </div>
       @endif
     
     
        <!-- Services-->
        <section class="page-section">
            <div class="container">
             
                <div class="row text-center">
                    <a href="#formation">
                  <div class="col-md-3">
                    <a href="#formation"><span class="fa-stack fa-3x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                           <i class="fas fa-graduation-cap fa-stack-1x fa-inverse"></i>
                                
                        </span>
                        </a>
                        <h4 class="my-3">Formation</h4>
                        <p class="text-muted">La formation est l'essence de tous succes.<br><strong class="font-weight text-black">Arnaud Boti</strong>.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="#experiences"><span class="fa-stack fa-3x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3">Experiences</h4>
                        <p class="text-muted">La connaissance s'acquiert par l'expérience, tout le reste n'est que de l'information.<br><strong class="font-weight text-black">Albert Einstein</strong>.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="#competences"><span class="fa-stack fa-3x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-code fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3">Competences</h4>
                        <p class="text-muted">La compétence n'est développée que par des heures et des heures de travail.<br><strong class="font-weight text-black">Usain Bolt</strong>.</i>
                    </div>
                    <div class="col-md-3">
                        <a href="#softskills"><span class="fa-stack fa-3x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-magic fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3">SoftSkills</h4>
                        <p class="text-muted">Il est préférable de diriger de l’arrière et mettre les autres devant, en particulier lorsque les choses vont bien. En revanche, il faut monter au front en cas de danger. C’est ainsi que les gens apprécieront votre leadership.<br><strong class="font-weight text-black">Nelson Mandela</strong>.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mes PROJETS</h2>
                    <h3 class="section-subheading text-muted">Projets réalisés en formation et en auto-formation.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item border">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fab fa-vuejs fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/single.png')}}" alt="dossier pro"><br>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><i class="fa fa-quote-left text-warning"></i> Blog</div>
                                <div class="portfolio-caption-subheading text-muted">Vuejs</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item border">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fab fa-php fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/lafleur1.png')}}" alt="dossier pro"><br>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><i class="fa fa-quote-left text-warning"></i> La Fleur</div>
                                <div class="portfolio-caption-subheading text-muted">Php </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item border">
                            <a class="portfolio-link border" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fab fa-vuejs fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/air.png')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><i class="fa fa-quote-left text-warning"></i> Air</div>
                                <div class="portfolio-caption-subheading text-muted">Vue.js</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item border">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fab fa-laravel fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/rismo.fr.png')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><i class="fa fa-quote-left text-warning"></i> Mon site</div>
                                <div class="portfolio-caption-subheading text-muted">Laravel</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item border">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fab fa-vuejs fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/calcul.png')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><i class="fa fa-quote-left text-warning"></i> Calculateur</div>
                                <div class="portfolio-caption-subheading text-muted">Vue.js</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item border">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fab fa-laravel fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/imt1.png')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><i class="fa fa-quote-left text-warning"></i> Stage</div>
                                <div class="portfolio-caption-subheading text-muted">Laravel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="cv">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"> CV</h2>
                    <h3 class="section-subheading text-muted">Mon curriculum</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-code fa-3x fa-stack-1x fa-inverse"></i>

                            
                         </div>
                        

                         <section class="page-section" id="competences">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                         
                                <h4>COMPETENCES</h4>
                               
                                <h5 class="subheading">Langages</h5>
                            </div>
                            @foreach ($competences as $competence)
                            {{$competence->nom}}
                                <div class="progress">

                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$competence->lien}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$competence->pourcentage}}%">
                            
                                        </div>  
                            
                                    </div>
                                    @endforeach
                                  
                               <br>
                                    <h5 class="subheading">Softwares</h5>
                                
                              
                                @foreach ($utilitaires as $utilitaire)
                                {$utilitaire->nom}
                                    <div class="progress">
    
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$competence->lien}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$utilitaire->pourcentage}}%">
                                
                                            </div>  
                                
                                        </div>

                                 

                                    @endforeach

                        </div>
                       
                         </section>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image" id="formation">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-graduation-cap fa-3x fa-stack-1x fa-inverse"></i>

                            
                         </div>
                         
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            
                                
                                <h4> FORMATIONS</h4>
                                <h5 class="subheading">Developpeur Web et Web Mobile</h5>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="https://www.afpa.fr/formation-qualifiante/developpeur-logiciel" class="text-success">Afpa de brest</a></li>
                                    <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Novembre 2019 /Juillet 2020</li>
                                    <li class="list-group-item"><i class="fa fa-graduation-cap"></i>&nbsp;Titre obtenu le 8 juillet 2020</li>
                                    <li class="list-group-item"><i class="fa fa-play-circle"></i>&nbsp;<a href="{{asset('images/Titre.jpg')}}" class="text-success">Voir le titre</a></li>
                                  </ul>
                                  <h4>Auto-formation</h4>
                                  <h5 class="subheading">Vue-Js</h5>
                                </div>
                                <div class="timeline-body"><p class="text-muted">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="https://www.udemy.com/" class="text-success">Udemy</a></li>
                                        <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Juillet 2020</li>
                                        <li class="list-group-item"><i class="fa fa-graduation-cap"></i>&nbsp;Sept 2020</li>
                                        <li class="list-group-item"><i class="fa fa-play-circle"></i>&nbsp;<a href="{{asset('images/udemy.jpg')}}" class="text-success">Voir le titre</a></li>
                                      </ul>
                                    </div>
                                       
                    </li>
                   
                    <li>
                        <section class="page-section" id="experiences">
                        <div class="timeline-image">
                        
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-3x fa-stack-1x fa-inverse"></i>
                        
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>EXPERIENCES</h4>
                                <h5 class="subheading">Stage</h5>
                            </div>
                            <div class="timeline-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="https://www.imt-atlantique.fr/fr/l-ecole/campus/campus-de-brest"class="text-success">IMT-Atlantique</a></li>
                                    <li class="list-group-item"><i class="fa fa-file-code"></i>&nbsp;&nbsp;<a href="https://rismo.fr/apps/imt"class="text-success">Application de gestions des demandes de ressources</a></li>
                                    <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;20 Avril /26 Juin 2020</li>
                                    
                                  </ul>

                                  

                            </div><br>
                            <h5 class="subheading">Transport</h5>
                            <div class="timeline-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;BCA</li>
                                    <li class="list-group-item"><i class="fa fa-file-code"></i>&nbsp;&nbsp;Chauffeur camion toupie béton</li>
                                    <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Aout 2005 /Nov 2020</li>
                                   
                                  </ul>

                            </div><br>
                            <div class="timeline-heading">
                                <h4>Divers</h4>
                                <h5 class="subheading">Service National</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<a href="https://fr.wikipedia.org/wiki/2e_r%C3%A9giment_de_commandement_et_de_soutien"class="text-success">2éme RCS VERSAILLES SATORY</a></li>
                                    <li class="list-group-item"><i class="fa fa-file-code"></i>&nbsp;&nbsp;<a href="https://rismo.fr/apps/imt"class="text-success">Marechal des logis / Circulation routiére</a></li>
                                    <li class="list-group-item"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Aout 95 / Avril 97</li>
                                    <li class="list-group-item"><i class="fa fa-play-circle"></i></i>&nbsp;<a href="{{asset('images/rcs.png')}}"class="text-success">Voir le certificat</a></li>
                                   
                                  </ul>


                            </div>
                        </div>
                    </li>
                   
                    <li class="timeline-inverted" id="softskills">
                       
                        <div class="timeline-image">
                         
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-magic fa-3x fa-stack-1x fa-inverse"></i>
                        
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>SOFTSKILLS</h4>
                                <div id="carousel" class="carousel slide" data-ride="carousel">
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
                                        <h1 class="text-muted">Curieux</h1>
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/never.jpg')}}" alt="Un tigre">
                                        <div class="carousel-caption">
                                     
                                        </div>
                                        <h1 class="text-muted">Perseverant</h1>
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/audacieux.jpg')}}" alt="Un tigre">
                                        <div class="carousel-caption">
                                         
                                        </div>
                                        <h1 class="text-muted">Audacieux</h1>
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
                    </li>
                    <li class="timeline-inverted">
                        <a href="{{asset('images/cv.pdf')}}">
                        <div class="timeline-image">
                            <h5 class="mt-3">
                                CV<br>
                                <i class="fa fa-download fa-2x"></i>
                            </h5>
                        </div>
                        </a>
                    </li>
                </ul>
            
            </div>
        </section>
        <!-- Team-->
     
                <section class="page-section bg-light" id="portfolio2">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase"> <i class="fa fa-quote-left text-warning"></i> Syntheses<br> Formation / Stage</h2>
                    <h3 class="section-subheading text-muted">Ici vous trouverez mon projet et mon dossier professionnel de synthese de fin de formation .</h3><br>
                </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 mb-4">
                                <div class="portfolio-item border">
                                   <a href="{{asset('images/Dossier.pdf')}}"><div class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fa fa-file-pdf fa-2x"></i></div>
                                        </div>
                                        <img class="mx-auto img-fluid" src="{{asset('images/dp.png')}}" alt="dossier pro" />
                                        </div>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><i class="fa fa-quote-left text-warning"></i> DOSSIER PRO</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 mb-4">
                                <div class="portfolio-item border">
                                    <a href="{{asset('images/Projet.pdf')}}"><div class="portfolio-link" data-toggle="modal">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"> <i class="fa fa-file-pdf fa-2x"></i></div>
                                        </div>
                                        <img class="mx-auto img-fluid" src="{{asset('images/pp.png')}}" alt="projet pro" />
                                        </div>
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading"><i class="fa fa-quote-left text-warning"></i> PROJET PRO</div>
                                       
                                    </div>
                                </div>
                            </div>
                            
                           
                </section>

              
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Merci d'avoir pris le temps de lire mes projets.<br>
                    N'hésitez pas a me faire des retours en me laissant un <a href="#message"class="text-success" >Message</a></p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 my-3">
                        <a href="https://www.udemy.com/" target="_blank"><img class="img-fluid d-block mx-auto" src="https://www.udemy.com/staticx/udemy/images/v6/logo-coral.svg" alt="udemy" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 my-3">
                        <a href="https://www.rismo.fr" target="_blank"><img class="img-fluid d-block mx-auto" src="{{asset('images/rismo.png')}}" alt="rismo.fr" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 my-3">
                        <a href="#!" target="_blank"><img class="img-fluid d-block mx-auto" src="https://www.afpa.fr/image/layout_set_logo?img_id=34521924&t=1601282013433" alt="" /></a>
                    </div>
                   
                </div>
            </div>
        </div>
        <section class="page-section bg-light" id="team">
          
            <div class="container">
                
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Vos messages</h2>
                    <h3 class="section-subheading text-muted">Ici vous trouverez vos messages publiés.</h3>
                </div>
                
              
                <div class="row">
                    
                
                    <div class="col-lg-4">
                        
                     
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" id="moi"src="{{asset('images/moiprofil.jpg')}}" alt="" />&nbsp;
                            <h4>Rismo</h4>
                            <p class="text-muted">Developpeur Web Junior</p>
                            <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                            <p class="">Bonjour et bienvenue<br>Laissez moi un message.</p>
                           
                     
                        
                         
                    </div>
                    </div>

                    <div class="col-lg-4">
                        
                     
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" id="moi"src="{{asset('images/avt2.jpg')}}" alt="" />&nbsp;
                            <h4>Thierry</h4>
                            <p class="text-muted">Integrateur Web</p>
                            <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                            <p class="">Felicitations pour ton site<br>Le travail finit toujours par payer.</p>
                           
                     
                        
                         
                    </div>
                    </div>
                    <div class="col-lg-4">
                        
                     
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" id="moi"src="{{asset('images/avt1.jpg')}}" alt="" />&nbsp;
                            <h4>Mickael</h4>
                            <p class="text-muted">Web Designer Junior</p>
                            <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                            <p class="">Bravo rismo.<br>Bonne continuation.</p>
                           
                     
                        
                         
                    </div>
                    </div>
                   
                    @foreach($messages as $message)
                    <div class="col-lg-4">
                        <div class="team-member">
                            
                            <img class="mx-auto rounded-circle" id =guest src="{{asset('images/thank.png')}}" alt="" />
                            <h4>{{ucfirst($message->nom)}}</h4>
                            <p class="text-muted">{{ucfirst($message->fonction)}}</p>
                            <hr style="height:2px;border-width:0;color:gray;background-color:#e6b301">
                            <p class="">{{ucfirst($message->message)}}</p>
                           
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
               
        </section>

        <section class="page-section" id="contact">
           
            <div class="container">
                @include('inc.errorsuccess')
             
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"id="message" >Contactez-moi</h2>
                    <h3 class="section-subheading text-warning">Laissez moi un message.</h3>
                    <p class="text-warning text-right"> * champs obligatoires</p><br>
                </div>
               
                {!! Form::open(['action'=> 'MessageController@store','method'=>'POST','enctype'=>"multipart/form-data"]) !!}

                <div class="row contact-form-wrap justify-content-center">
                    <div class="col-md-6 contact-name form-col">
                      <h5 class="font-weight-normal text-warning">{{ Form::label('nom','Nom *')}}</h5>
                            <h6 class="text-capitalize">{{Form::text('nom','',['class'=>'form-control','required','placeholder'=>'','onfocus'=>"placeholder",'onblur'=>'placeholder'])}}</h6>
                    </div>
                    <div class="col-md-6 contact-fonction form-col">
                        <h5 class="font-weight-light text-warning"> {{Form::label('fonction','Fonction *')}}</h5>
                        <h6 class="text-capitalize">{{Form::text('fonction','',['class'=>'form-control','required','placeholder'=>'','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</h6>

                     </div>

                    <div class="col-lg-12 contact-email form-col">
                       <h5 class="font-weight-normal text-warning"> {{Form::label('email','Email *')}}</h5>
                       <p>{{Form::text('email','',['class'=>'form-control','required','placeholder'=>'','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</p>

                    </div>
                       <!--
                    <div class="col-lg-12 form-col"
                        <h5 class="font-weight-normal">{{Form::label('photo','Photo')}}</h5><br>
                       <p class="">{!!Form::file('')!!}</p>
                     </div>
                     <br>
                     -->
                    <div class="col-lg-12">
                        <h5 class="font-weight-normal text-warning">{{ Form::label('message','Message')}}</h5>
                        <p class="text-capitalize">{{ Form::textarea('message','',['class'=>'form-control','required','placeholder'=>'','rows'=>'5','text'=>'capitalize','onfocus'=>'placeholder','onblur'=>'placeholder'])}}</a>
                            <h6 class="font-weight-light text-warning"> {{Form::label('afficher','Cochez, si vous souhaitez afficher votre message sur le site.')}}</h6>
                            <p>{{Form::checkbox('published','1',false,['class'=>'font-weight-bold','border'])}}</p>
                            
                    </div>
                  
                    {!! Form::submit("Envoyer ",['class'=>'btn btn-outline-primary btn-lg text-uppercase','value'=>'Envoyer','id'=>'sendMessageButton'])!!}
                    
                </div>

        </div>
    </div>

    {!! Form::close()!!}
</div>

            </div>
            <p>* champs obligatoires</p>
        </section>
              <!-- Modal 1-->
                   <!-- Portfolio Modals-->
            <!-- Modal 1-->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Blog</h2>
                                        <p class="item-intro text-muted">Projet réalisés en vue.js.</p>
                                        <img class="img-fluid d-block mx-auto" id="blog" src="{{asset('images/single.png')}}" alt="" />
                                        <p>Réalisation d'une application front-end <strong class="text-success">Vue.js</strong> avec vue-cli. </p>
                                        <ul class="list-inline">
                                            <li>Date: Aout 2020</li>
                                           
                                            <li>Category: Front-end</li>
                                        </ul>
                                        <a target="_blank" href="https://rismo.fr/apps/blog2"class="text-success">
                                            <i class="fa fa-chevron-right"></i>
                                            VOIR LE PROJET
                                            <i class="fa fa-chevron-left"></i>
                                         </a>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 2-->
        

            <!-- Modal 2-->
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Lafleur</h2>
                                        <p class="item-intro text-muted">Projet réalisé en php.</p>
                                        <img class="img-fluid d-block mx-auto" id="la" src="{{asset('images/lafleur1.png')}}" alt="" />
                                        <p>Réalisation d'un site web en php avec connection a une base de donnée Mysql en utilsant l'objet PDO </p>
                                        <ul class="list-inline">
                                            <li>Date: fevrier 2020</li>
                                            <li>Client: Afpa</li>
                                            <li>Category: PHP</li>
                                        </ul>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                        <a target="_blank" href="https://rismo.fr/apps/laFleur"class="text-success">
                                            <i class="fa fa-chevron-right"></i>
                                            VOIR LE PROJET
                                            <i class="fa fa-chevron-left"></i>
                                         </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 3-->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Air</h2>
                                        <p class="item-intro text-muted">Projet réalisé en Vue.js.</p>
                                        <img class="img-fluid d-block mx-auto" id='air' src="{{asset('images/air.png')}}" alt="" />
                                        <p>Réalisation d'une application single page vuejs avec vuecli </p>
                                        <ul class="list-inline">
                                            <li>Date: Juillet 2020</li>
                                            <li>Client: auto-formation</li>
                                            <li>Category: Vue.js</li>
                                        </ul>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                        <a target="_blank" href="https://rismo.fr/apps/air2d4"class="text-success">
                                            <i class="fa fa-chevron-right"></i>
                                            VOIR LE PROJET
                                            <i class="fa fa-chevron-left"></i>
                                         </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 4-->
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Mon site</h2>
                                        <p class="item-intro text-muted">Création de mon site en laravel.</p>
                                        <img class="img-fluid d-block mx-auto" id="site" src="{{asset('images/rismo.fr.png')}}" alt="" />
                                        <p>Création de mon site en laravel</p>
                                        <ul class="list-inline">
                                            <li>Date: Aout 2020</li>
                                            <li>Client: auto-formation</li>
                                            <li>Category: Laravel</li>
                                        </ul>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                        <a target="_blank" href="http://rismo.fr"class="text-success">
                                            <i class="fa fa-chevron-right"></i>
                                            VOIR LE PROJET
                                            <i class="fa fa-chevron-left"></i>
                                         </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 5-->
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Calculateur</h2>
                                        <p class="item-intro text-muted">Création d'une application vue.js</p>
                                        <img class="img-fluid d-block mx-auto" id="calcul" src="{{asset('images/calcul.png')}}" alt="" />
                                        <p>Réalisation d'une single page en vue.js</p>
                                        <ul class="list-inline">
                                            <li>Date: Aout 2020</li>
                                            <li>Client: auto-formation</li>
                                            <li>Category: vue.js</li>
                                        </ul>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                        <a target="_blank" href="https://rismo.fr/apps/calculateur"class="text-success">
                                            <i class="fa fa-chevron-right"></i>
                                            VOIR LE PROJET
                                            <i class="fa fa-chevron-left"></i>
                                         </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 6-->
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="{{asset('img/close-icon.svg')}}" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Stage</h2>
                                        <p class="item-intro text-muted">Projet réalisé en Laravel</p>
                                        <img class="img-fluid d-block mx-auto" id="stage" src="{{asset('images/imt1.png')}}" alt="" />
                                        <p>Réalisation d'une application de gestion des demandes de ressources ( version1 )</p>
                                        <ul class="list-inline">
                                            <li>Date: Avril 2020 /Juin 2020</li>
                                            <li>Client: IMT-Atlantique</li>
                                            <li>Category: stage pratique</li>
                                        </ul>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                        <a target="_blank" href="{{asset('images/construct.jpg')}}"class="text-success">
                                            <i class="fa fa-chevron-right"></i>
                                             VOIR LE PROJET
                                             <i class="fa fa-chevron-left"></i>
                                         </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <!-- Footer-->
        <footer class="footer py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © <a href="https://rismo.fr" class="text-success">rismo.fr 2020 </a></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-3" target="_blank" href="https://twitter.com/?lang=fr"><i class="fab fa-twitter fa-2x"></i></a>
                        <a class="btn btn-dark btn-social mx-3" target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a class="btn btn-dark btn-social mx-3" target="_blank" href="https://www.linkedin.com/in/m-s-91700619b/"><i class="fab fa-linkedin-in fa-2x"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3 text-success" href="https://www.websitepolicies.com/policies/view/jmkRn8Ak" class="text-success">Privacy Policy</a>
                        <a href="#!"class="text-success">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>

        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
      
        
   


@endsection