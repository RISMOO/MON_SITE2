
@extends('layouts.app')
<style>
.map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
    </style>
@section('content')

    <header class="masthead" style="background-image: url('{{ asset('images/shoes.jpg')}}')" id="fond" >
       <div class="ap mb-5">
          <div class="button_cont mb-5"align="center" id="services"><a class="example_d" id="myBtn" style="display:none" target="_blank" rel="nofollow noopener"><i class="fa fa-angle-double-right"></i> A propos de moi <i class="fa fa-angle-double-left"></i></a></div>
            </div>
<!---------MODAL ACCUEIL A PROPOS--------->

@include('inc.index.modalAccueilIndex')

<!---------MODAL ACCUEIL A PROPOS/NAV--------->

@include('inc.index.modalAccueil2Index')


@if(Auth::guest())

<!------------DEBUT MODAL LOGIN ---------->

@include('inc.index.modalLoginIndex')

@endif

<!------------DEBUT MODAL REGISTER -------->

@include('inc.index.modalRegisterIndex')


</header>

        @include('inc.errorsuccess')
        @if(session()->has('message'))
        <div class="alert alert-success text-center border" role="alert">
        {{session()->get('message')}}
        </div>
       @endif

<!----------SECTION A PROPOS ------------>

@include('inc.index.sectionApropos')

<!----------- SECTION PROJET------------->

@include('inc.index.sectionProjet')

<!------- SECTION CV -------------------->

@include('inc.index.sectionCv')

<!--------SECTION SYNTHESE--------------->

@include('inc.index.sectionSynthese')


             <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Merci d'avoir pris le temps de lire mes projets.<br>
                    N'hésitez pas a me faire des retours en me laissant un <a href="#message"class="text-success" >Message</a></p></div>
                </div>
            </div>
<!------------- DEBUT NAV ---------------->

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



 <!-----SECTION MESSAGE -------------------->

@include('inc.index.sectionMessages')

 @foreach($messages as $message)

 <!------MESSAGES PUBLIE-------------------->

 @include('inc.index.messagePublie')

 <!---MODAL SHOW MESSAGE-------------------->
 @include('inc.index.messageShow')

@endforeach



<!-----SECTION CONTACT---------------------->

@include('inc.index.sectionContact')


<!--- MODAL INDEX SEND FORMULAIRE----------->

@include('inc.index.modalFormulaireSendIndex')

<!-------------MODAL INDEX EDIT------------->

@include('inc.index.modalFormulaireEditIndex')

<!---------SECTION PROJET SHOW--------------->

@include('inc.index.sectionProjetShow')


<div class="view">
  <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid" alt="placeholder">
  <div class="mask flex-center waves-effect waves-light rgba-red-strong">
    <p class="white-text">strong overlay</p>
  </div>
</div>

<div class="container">
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10585.795996157784!2d-4.425130170752285!3d48.447914057827276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4816b077a23fffff%3A0x95fa795fb7c0bb1c!2sA%C3%A9roport%20Brest%20Bretagne!5e0!3m2!1sfr!2sfr!4v1607877753372!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

</div>

<!-- Material form login -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Sign in</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="#!">

        <!-- Email -->
        <div class="md-form">
          <input type="email" id="materialLoginFormEmail" class="form-control">
          <label for="materialLoginFormEmail">E-mail</label>
        </div>

        <!-- Password -->
        <div class="md-form">
          <input type="password" id="materialLoginFormPassword" class="form-control">
          <label for="materialLoginFormPassword">Password</label>
        </div>

        <div class="d-flex justify-content-around">
          <div>
            <!-- Remember me -->
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
              <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
            </div>
          </div>
          <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
          </div>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

        <!-- Register -->
        <p>Not a member?
          <a href="">Register</a>
        </p>

        <!-- Social login -->
        <p>or sign in with:</p>
        <a type="button" class="btn-floating btn-fb btn-sm">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a type="button" class="btn-floating btn-tw btn-sm">
          <i class="fab fa-twitter"></i>
        </a>
        <a type="button" class="btn-floating btn-li btn-sm">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a type="button" class="btn-floating btn-git btn-sm">
          <i class="fab fa-github"></i>
        </a>

      </form>
      <!-- Form -->

    </div>

  </div>
  <!-- Material form login -->
@include('inc.index.footer')



@endsection
