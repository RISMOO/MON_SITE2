

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/accueil#page-top"><i class="fa fa-home"></i></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars ml-1"></i>
      </button>
   
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase mr-5">
             
              <li class="nav-item"><a class="nav-link js-scroll-trigger font-weight-light" href="/accueil#services">A propos</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger font-weight-light" href="/accueil#portfolio">Mes projets</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger font-weight-light " href="/accueil#team">Syntheses</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger font-weight-light" href="/accueil#contact">Contact</a></li>
          </ul>
          <ul class="navbar-nav ml-auto">

         
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item ">
                      <a class="nav-link font-weight-light " href="{{ route('login') }}"  data-toggle="modal" data-target="#logs"><i class="fa fa-user"></i> Login</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item ">
                          <a class="nav-link font-weight-light" href="{{ route('register') }}"data-toggle="modal" data-target="#reg"><i class="fa fa-sign-out-alt"></i> Register</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/home"><i class="fa fa-home"></i>&nbsp;Tableau de bord</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>&nbsp;Se deconnecter
                           
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>

                    













