
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
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- CSRF Token -->
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
                  <section class="testimonial-section section-gap-full mb-5" id="section_messages">
                   <div class="fullscreen-video-wrap">
                    <div class="overlay"></div>
                     <video playsinline="" autoplay="autoplay" muted="muted" loop="loop">
                      <source src="{{asset('images/et.mp4')}}" type="video/mp4">
                   </video>
                  </div>
                <div class="container h-100" id="cont" style="display:none">
                 <div class="row h-100 align-items-center justify-content-center text-center">
                   <div class="col-lg-10 align-self-end">
                     <hr class="divider my-4" />
                      <h1 class="text-white font-weight-light">BIENVENUE<span class="font-weight-bold"> SUR MON </span><span class="letter">PORTFOLIO</span></h1><br><br><br>
                   </div>
                     <div class="col-lg-8 align-self-baseline">
                      <a href="/accueil"><img class="rounded-circle mb-5" src="{{asset('images/moiprofil.jpg')}}"id="moiprofil" alt="avatar" /></a><br>
                    </div>
                   </div>
                  </div>
                 </section>
                </header>
 


  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/welcome.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.parallax-scroll.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

   </body>
  </html>







