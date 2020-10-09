@extends('layouts.app')



@section('content')
<!-- Start header section -->
   <!-- Preloader -->
   <header class="header-area" id="header-area">
    <div class="dope-nav-container breakpoint-off">
        <div class="container">
            <div class="row">
 <nav class="dope-navbar justify-content-between" id="dopeNav">

    <!-- Logo -->
   
    <a class="nav-brand" href="/accueil"><img class="img-fluid text-center" id="circle" src="{{asset('images/circlerismo3.png')}}"alt="logo"></a>

    <!-- Navbar Toggler -->
    <div class="dope-navbar-toggler">
        <span class="navbarToggler">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </div>

    <!-- Menu -->
    <div class="dope-menu">

        <!-- close btn -->
        <div class="dopecloseIcon">
            <div class="cross-wrap">
                <span class="top"></span>
                <span class="bottom"></span>
            </div>
        </div>

        <!-- Nav Start -->
        <div class="dopenav">
            <ul id="nav">
                <li>
                    <a href="/accueil#section_about">A PROPOS</a>
                    </li>
                    <li>
                    <a href="/accueil#section_projets">PROJETS</a>
                    </li>
                    <li>
                        <a href="/accueil#section_messages">MESSAGES</a>
                    </li>
                    <li>
                        <a href="/accueil#section_contact">CONTACT</a>

                    </li>
                    <li>
                            <a href="cv">CV</a>

                        </li>




            </ul>
        </div>
    </div> <!-- Nav End -->
</nav>
 </div>
     </div>
      </div>
        </header>


<!-- Start page-top-banner section -->

        <div class="row section-gap-half mt-5 ml-5 mr-5">
            <div class="col-lg-12 text-center ml-3">
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
                <a href="#section_competences"><img class="img-fluid ml-3 mr-3" id='cv' src="{{asset('images/comp.png')}}" alt="competences"></a>
                <a href="#section_experience"><img class="img-fluid m-2" id="cv" src="{{asset('images/exper.png')}}" alt="experiences"></a>
                 <a href="#section_formation"><img class="img-fluid m-2" id="cv" src="{{asset('images/classe.png')}}" alt="formation"></a>
                <a href="#section_loisirs"><img class="img-fluid m-2" id="cv" src="{{asset('images/loisirs.png')}}" alt="loisirs"></a>

            </div>
        </div>
    </div>
<!-- About-->
<section class="page-section" id="about">
  <div class="container">
      <div class="text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
      <ul class="timeline">
          <li>
              <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4>2009-2011</h4>
                      <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
              </div>
          </li>
          <li class="timeline-inverted">
              <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4>March 2011</h4>
                      <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
              </div>
          </li>
          <li>
              <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4>December 2012</h4>
                      <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
              </div>
          </li>
          <li class="timeline-inverted">
              <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4>July 2014</h4>
                      <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
              </div>
          </li>
          <li class="timeline-inverted">
              <div class="timeline-image">
                  <h4>
                      Be Part
                      <br />
                      Of Our
                      <br />
                      Story!
                  </h4>
              </div>
          </li>
      </ul>
  </div>
</section>
<!-- End about-top-banner section -->

<!-- Start blog-lists section -->
<section class="blog-lists-section section-gap-full"id="section_competences"data-stellar-background-ratio="0.5" >

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-lists">
                    <div class="single-blog-post">
                        <div class="post-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="{{asset('images/experiences.jpg')}}" alt="experiences">
                        </div>

                        <div class="post-details">
                                <blockquote class="blockquote">

                                    <div class="user-img text-center">
                                        <img class="img-fluid m-2" src="{{asset('images/comp.png')}}" alt="competences">
                                        </div>
                                      <h1><a href="https://single-page-heroku.herokuapp.com/">HEROKU</a></h1>
                                        <h5 class="text-dark b-0">COMPETENCES</h5><hr>

                                  </blockquote><div class="post-thumb relative">

                                </div>

                                <p class="text-center">LANGAGES</p>
                            <p>



@foreach ($competences as $competence)
<div class="container">
    <div class='row'>
        <div class="col-sm-12 col-lg-8" style="width:70rem">
<div class="media">
    <img class="align-self-start mr-3" src={{$competence->lien}} alt="Generic placeholder image">

    <div class="media-body">
        <h5 class="mt-0 mb-1 font-weight-normal text-dark">{{$competence->nom}}</h5>
       <div class="mr-2 progress">

        <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:{{$competence->pourcentage}}%" >

            </div>

        </div>

         </div>
         </div>
       </div>
    </div>

</div>
<br>
@endforeach
        <p class="text-center">SOFTWARES</p>
@foreach ($utilitaires as $utilitaire)
<div class="container">
  <div class='row'>
    <div class="col-sm-12 col-lg-8" style="width:70rem ">
      <div class="media">
        <img class="align-self-start mr-3" src={{$utilitaire->lien}} alt="Generic placeholder image">
          <div class="media-body">
           <h5 class="mt-0 mb-1 font-weight-normal text-dark ">{{$utilitaire->nom}}</h5>
             <div class="mr-2 progress">
               <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:{{$utilitaire->pourcentage}}%" >
                </div>
              </div>
            </div>
         </div>
       </div>
    </div>
</div>
<br>
     @endforeach
        <p class="text-center">FRAMEWORKS</p>
     @foreach ($frameworks as $framework)
         <div class="container">
       <div class='row'>
     <div class="col-sm-12 col-lg-8" style="width:70rem ">
  <div class="media">
    <img class="align-self-start mr-3" src={{$framework->lien}} alt="Generic placeholder image">
           <div class="media-body">
              <h5 class="mt-0 mb-1 font-weight-normal text-dark">{{$framework->nom}}</h5>
                <div class="mr-2 progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width:{{$framework->pourcentage}}%" >
                      </div>
                   </div>
                </div>
            </div>
         </div>
     </div>
  </div>



  <br>
@endforeach
    <br>

<h5 class="text-dark mb-0" id="section_soft">SOFTSKILLS</h5><hr>
  <section class="portfolio-section section-gap-full" id="section-portfolio">
    <div class="container">
            <div class="col-lg-10 ml-5">
                <div class="row">
                   <div class="single-portfolio">
                      <div class="col-lg-6cl">
                         <img alt="" class="img-fluid" src="{{asset('images/curieux.jpg')}}">
                            <div class="box-content">
                                <h5 class="title">Curieux</h5>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-6">
                  <div class="single-portfolio">
                     <img alt="" class="img-fluid" src="{{asset('images/never.jpg')}}">
                        <div class="box-content">

                      <h5 class="title">Perseverant</h5>
                 </div>
                 </div>
                    </div>
                      <div class="col-lg-6">
                        <div class="single-portfolio">
                          <img alt="" class="img-fluid" src="{{asset('images/audacieux.jpg')}}">
                            <div class="box-content">
                                 <h5 class="title">Audacieux</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



     </section>
     <section class="section section-gap-full" id="section-portfolio">
         <div class="single-blog-post"id="section_experience">
            <div class="post-thumb relative">
               <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="{{asset('images/competences.jpg')}}" alt="">
                </div>
                     <div class="post-details">
                        <div class="user-img text-center">
                            <img class="img-fluid m-2" src="{{asset('images/exper.png')}}" alt="experiences"></a>
                </div>
                     <h5 class="text-dark mb-0">EXPERIENCES</h5><hr>
                         <blockquote class="blockquote ml-5">
                             <footer class="blockquote-footer">Stage</footer>
                         </blockquote>

                 @foreach ($stages as $stage)
                        <div class="intitulé formation d-flex align-items-start">
                         <div class="formation">
                           <p>
                             <a href="https://www.imt-atlantique.fr/fr"><i class="fa fa-server fa-2x" aria-hidden="true"></i>&ensp;{{$stage->nom}}</a><br>
                          </p>
                         <p>
                         &nbsp;<a href="#" ><i class="fa fa-tablet fa-2x" aria-hidden="true"></i>&ensp;&ensp;{{$stage->projet}}</a><br>
                        </p>
                            <p>
                             <a href="https://www.google.fr/maps/place/IMT+Atlantique/@48.3582065,-4.5725661,17z/data=!3m1!4b1!4m5!3m4!1s0x4816be39dac601ad:0x271a5b153615b2ad!8m2!3d48.3582065!4d-4.5703774"><i class="fa fa-map-marker fa-2x ml-2"></i>&ensp;&ensp;{{$stage->lieu}}</a><br>
                            </p>
                                 <p>
                                 <i class="fa fa-user fa-2x ml-1"></i>&ensp;&ensp;{{$stage->referend}}</a><br>
                                </p>
                               <p>
                               <a href="{{asset('images/service_m.png')}}"><i class="fa fa-calendar fa-2x ml-1" aria-hidden="true"></i>&ensp;{{$stage->date}}
                               </p>
                     </div>
                        </div>
                           <hr>
                 @endforeach
                      <blockquote class="blockquote ml-5">
                           <footer class="blockquote-footer">Transport</footer>
                    </blockquote>
                 @foreach ($transports as $transport)
                    <div class="intitulé formation d-flex align-items-start">
                      <div class="formation">
                          <p>
                          <i class="fa fa-truck fa-2x mr-1" aria-hidden="true"></i>&ensp;{{$transport->poste}}</a><br>
                          </p>
                         <p>
                         <a href="https://www.google.fr/maps/place/Tanguy+Mat%C3%A9riaux+Lannilis/@48.5723138,-4.5276222,17z/data=!3m1!4b1!4m5!3m4!1s0x4816a6ca292c109d:0xcffb34ade826057c!8m2!3d48.5723103!4d-4.5254335"><i class="fa fa-map-marker fa-2x ml-2"></i>&ensp;&ensp;{{$transport->ets}}</a><br>
                         </p>
                         <p>
                         <a h="https://www.afpa.fr/formation-qualifiante/developpeur-logiciel"> <i class="fa fa-calendar fa-2x ml-1" aria-hidden="true"></i>&ensp;{{$transport->date}}</a>
                         </p>

                </div>
                    </div>
                       <hr>
                 @endforeach
                     <h5 class="text-dark mb-0">DIVERS</h5><hr>
                        <blockquote class="blockquote ml-5">
                           <footer class="blockquote-footer">Service National</footer>
                    </blockquote>

                 @foreach ($experiences as $experience)
                  <div class="intitulé formation d-flex align-items-start">
                    <div class="formation">
                        <p>
                        <a href="https://fr.wikipedia.org/wiki/2e_r%C3%A9giment_de_commandement_et_de_soutien"><i class="fa fa-users fa-2x " aria-hidden="true"></i>&ensp;{{$experience->nom}}</a><br>
                        </p>
                       <p>
                       <a href="https://www.google.com/maps/search/versailles+satory/@48.791797,2.0831451,14z/data=!3m1!4b1"><i class="fa fa-map-marker fa-2x ml-2"></i>&ensp;&ensp;{{$experience->lieu}}</a><br>
                       </p>
                       <p>
                        <a href="{{asset('images/service_m.png')}}"><i class="fa fa-calendar fa-2x ml-1" aria-hidden="true"></i>&ensp;{{$experience->date}}</a>
                       </p>
                    </div>
                 </div>
                <hr>
             @endforeach
                    <div class="single-blog-post"id="section_formations">
                        <div class="post-thumb relative">
                            <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{asset('images/formation.jpg')}}"alt="formation">
                           </div>
                         <div class="post-details">
                            <div class="user-img text-center">
                                <img class="img-fluid m-2" src="{{asset('images/classe.png')}}" alt="formations">
                                  </div>
                                    <br>

                                <h5 class="text-dark mb-0">FORMATIONS</h5><hr>
                                    <blockquote class="blockquote ml-5">
                                       <footer class="blockquote-footer">Web</footer>
                              </blockquote>
                           <div class="intitulé formation d-flex align-items-start">

                 @foreach($formations as $formation)
                         <div class="formation">
                           <p>
                             <a href="{{asset('images/Titre.jpg')}}"><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>{{$formation->nom}}</a><br>
                             </p>
                            <p>
                              <a href="https://www.google.fr/maps/place/AFPA/@48.4132489,-4.5035564,17z/data=!3m1!4b1!4m5!3m4!1s0x4816bb8b7624b357:0x74a54f7f93e8cfab!8m2!3d48.4132489!4d-4.5013677"><i class="fa fa-map-marker fa-2x ml-2" aria-hidden="true"></i>&ensp;&ensp;{{$formation->lieu}}</a><br>
                            </p>
                            <p>
                              <a href="https://www.afpa.fr/formation-qualifiante/developpeur-logiciel"> <i class="fa fa-calendar fa-2x ml-1" aria-hidden="true"></i>&ensp;{{$formation->date}}</a>
                            </p>
                         </div>
                      </div>
                      <hr>
                 @endforeach
                            
                                
                                
                            
                           <br>
                        </div>
                    </div>
                      <div class="single-blog-post"id="section_loisirs">
                        <div class="post-thumb relative">
                            <div class="overlay overlay-bg"></div>
                               <img class="img-fluid" src="{{asset('images/loisirs.jpg')}}" alt="loisirs">
                        </div>
                           <div class="post-details">
                            <blockquote class="blockquote">
                               <div class="user-img text-center">
                                 <img class="img-fluid m-2" src="{{asset('images/loisirs.png')}}" alt="formations">
                            </div>
                                <h5 class="text-dark mb-0">LOISIRS</h5><hr>
                                  <footer class="blockquote-footer">Centres d'interets</footer>
                              </blockquote>
                              <p>
                                <img src="https://img.icons8.com/ios-glyphs/30/000000/single-father.png"/>Famille
                                </p>
                              <p>
                                <img src="https://img.icons8.com/material-sharp/24/000000/code.png"/>&ensp;Langages de programmation
                                </p>
                               <p>
                                <img src="https://img.icons8.com/ios-glyphs/24/000000/hammer.png"/>&ensp;Bricolage
                              </p>

                              <p>
                                <img src="https://img.icons8.com/android/24/000000/running.png"/>&ensp;Course a pieds
                                </p>

                                </div>


                      </div>
                     
         
                      <div class="post-details text-center">
                        <a href="{{asset('images/CV_M_S.pdf')}}"download class="primary-btn"><i class="fa fa-download"></i>&ensp;CV</a>
                      </div>
                </section>




                   <div class="scroll-top">

                     <i class="ti-angle-up"></i>
                      </div>
@endsection
