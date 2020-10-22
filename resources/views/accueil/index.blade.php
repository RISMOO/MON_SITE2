
@extends('layouts.app')

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
       
<!---------Footer---------------------------->
@include('inc.index.footer')  

       

@endsection