@extends('layouts.app')

@section('content')
<body class="mast" style="background-image: url('{{ asset('images/tb1.jpg')}}')" >   
<!-- Masthead-->
<header>     
   @if(session('status'))
      <div class="alert alert-success">
       {{session('status')}}
      </div>
  @endif 
</header>

  
@if(count($messages) > 0 )
<script>
  const messages = {!! $messages !!}//transfert javascript laravel
</script>

<!---------MODAL ACCEUIL-------------->

@include('inc.home.modalHomeAccueil')
   
<!-----MODAL SEND MESSAGE ------------->

@include('inc.home.modalFormulaireSendHome')
 
<!----- MODAL EDIT MESSAGE-------------->
  
@include('inc.home.modalHomeEdit')

<!------HISTORIQUE MESSAGES------------>
        
@include('inc.home.historiqueMessages')                   

<!-- MODAL ACCEUIL SI AUCUN MESSAGE----->    

 @else 
 @include('inc.home.modalHomeAccueil2')  
 @endif

<!---- MODAL SEND2 MESSAGE-------------->       

@include('inc.home.modalFormulaireSend2Home')       
</body>
@endsection
