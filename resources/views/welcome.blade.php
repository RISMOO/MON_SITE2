


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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="assets/images/circle_moi.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
  

  
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

   


    <title>{{ config('app.name', 'MonSite') }}</title>



    <title>{{ config('app.name', 'MonSite') }}</title>



</head>


<body>

<!--

  <section class="showcase">


<div class="video.container">
  <video playsinline="" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{asset('images/videoVille.mp4')}}" type="video/mp4">
  </video>
</div>
<div class="content">

  <h1>Bienvenue sur mon site </h1>
  <h3>LARAVEL vs VUEJS </h3>
    <a href="#about" class="btn">A propos</a>
</div>
  </section>

  <section id="about">

    <h1>A propos </h1>
    <p>
   Ce site a pour but de mettre en pratique mes connaissances acquises lors de mes apprentisages.
   Il servira donc de support pour mes projets réalisés et aussi mon cv .
   N'hesitez pas a me laisser un message,si vous avez des suggestions ou autres !
   Bonne découverte
   <a href="#about" class="btn">Découvrir</a>

   <h2>Suivez moi </h2>

   <div class="social">
<a href="https://www.facebook.com/"target="_bla,n">

   </div>


    </p>



  -->

  <header class="masthead">
    <section class="testimonial-section section-gap-full mb-5" id="section_messages">
    <div class="fullscreen-video-wrap">
      <div class="overlay"></div>
      <video playsinline="" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{asset('images/bocal1.mp4')}}" type="video/mp4">
      </video>
    </div>
  
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-10 align-self-end">
              <h1 class="text-uppercase text-white font-weight-bold">BIENVENUE SUR MON PORTFOLIO</h1>
              <hr class="divider my-4" />
          </div>
          <div class="col-lg-8 align-self-baseline">
            <img class="rounded-circle mb-5" src="{{asset('images/avat.png')}}" alt="avatar" /><br>
             <a href="/accueil"><button class="btn-change1">DECOUVRIR</button></a>
          </div>
      </div>
  </div>
  </section>
</header>
 

      
 


    <!--permet d'afficher le contenu -->



</body>


</html>







