
 <section class="page-section" id="contact">
    <div class="container">
        @include('inc.errorsuccess')
         <div class="text-center">
            
      @if (Auth::guest())
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Nombre de visite
          <span class="badge badge-primary badge-pill" id="counter">0</span>
       
        </li>
    </ul>

            <h2 class="section-heading text-uppercase mt-2"id="message" >Contactez-moi</h2>
            
            
              <h3 class="section-subheading text-warning">Merci de vous connecter pour laisser un message !</h3>
                <div class="d-flex justify-content-center">
                  <a href="{{ route('login') }}"style="text-decoration:overline;" data-toggle="modal" data-target="#logs">Se connecter</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('register') }}"style="text-decoration:overline;"data-toggle="modal" data-target="#reg">S'enregistrer</a>
                </div>
                
                @else
                
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Nombre de visite
                      <span class="badge badge-primary badge-pill" id="counter">0</span>
                   
                    </li>
                </ul>
              
             @endif
             
            </section>