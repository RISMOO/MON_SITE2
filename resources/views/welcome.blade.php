
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('images/circle_moi.png')}}">
    <meta name="author" content="rismo">
    <!-- Meta Description -->
    <meta name="description" content="MonSite">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <script src="{{asset('js/amplitude.min.js')}}"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- CSRF Token -->
<!-- Font Awesome -->
<link
  href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.2.1/mdb.min.css"
  rel="stylesheet"
/>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">

    <title>{{ config('app.name', 'MonSite') }}</title>

           </head>
              <body>
                <header class="masthead">


                  <section class="testimonial-section section-gap-full mb-5"  id="section_messages">

                   <div class="fullscreen-video-wrap">
                    <div class="overlay"></div>
                     <video id="myvideo" playsinline="" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="{{asset('images/noel4.mp4')}}"type="video/mp4">
                   </video>
                  </div>
                <div class="container cent">
                 <div class="row align-items-center justify-content-center text-center">

                     <h1 class="joy" style="display:none" id="bienvenue">
                    MEILLEURS VOEUX
</h1><br><br>

         <div class="col-lg-8 align-self-baseline">
                      <a href="/accueil"><img id="moiProfil" class="rounded-circle moiprofil mt-2 mb-2 w-100 hover-shadow rotate" style="display:none" src="{{asset('images/moiprofil.jpg')}}" alt="avatar" /></a>

                    </div><br>

                    <div class="col-lg-8 align-self-baseline">
                   <h1 class="joy"style="display:none">A TOUTES ET TOUS<br><br>

                </h1>
                <div class="text-center mt-5">
                    <h2 class="" style="display:none;color:black">rismo<span class="font-weight-bold point">.</span><span class="">fr</span></h2>


                  </div>
                    </div>
                  <!--  <div class="glob-player"
                        <div class="glob-btn mt-5" id="zic" style="display:none" >
                            <span class="amplitude-prev btn btn-danger hover-shadow" data-toggle="tooltip"><i class="fa fa-step-backward" aria-hidden="true"></i></span>
                            <span class="btn amplitude-play-pause btn btn-danger hover-shadow" amplitude-main-play-pause="true"><i class="fa fa-play" aria-hidden="true"></i> <i class="fa fa-pause" aria-hidden="true"></i></span>
                            <span class="my-next-btn amplitude-next btn btn-danger hover-shadow"><i class="fa fa-step-forward" aria-hidden="true"></i></span>
                        </div>
                    -->
                     <!--   <div>
                            <div class="meta-name" amplitude-song-info="name" amplitude-main-song-info="true"></div>
                            <progress class="amplitude-song-played-progress" amplitude-main-song-played-progress="true" id="song-played-progress"></progress>
                        </div>-->
                <!--    </div> -->

                    <div class="col-lg-10 align-self-end mt-5">
                        <h2 class="" style="display:none;color:black" id="rismo">rismo<span class="font-weight-bold point">.</span><span class="">fr</span></h2>


                      </div>

                   </div>
                  </div>


                 </section>
                </header>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   @include('inc.welcome.scripts')

   </body>
  </html>

  <style>
   .moiprofil

{
min-width: 105px;
min-height: 105px;
max-width: 105px;
max-height: 105px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.507), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
margin-top: -2%;
margin-left: 1%;
transition: 0.3s;
filter: blur(4px);
}
/*-webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(250, 250, 250, 0.1)));*/
.moiprofil2

{
min-width: 105px;
min-height: 105px;
max-width: 105px;
max-height: 105px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.507), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
margin-top: -2%;
margin-left: 1%;
transition: 0.3s;





}
    </style>







