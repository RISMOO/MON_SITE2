<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{asset('images/circle_moi.png')}}" />
        <!-- Font Awesome icons (free version)-->
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/welcome.css')}}" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        @yield('stylesheets')
        <title>{{ config('app.name', 'MonSite') }}</title>

</head>
<body id="page-top">
<!---------NAVBAR--------------->
@include('inc.navbar')
@yield('content')

<!---------------SCRIPTS------------------->
@include('inc.index.scripts')
 
@yield('javascripts')


</body>
</html>

