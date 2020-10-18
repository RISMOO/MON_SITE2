@if (count($errors)> 0)
    @foreach($errors->all() as $error)
    <div class =" text-center alert alert-danger">

        {{$error}}
    </div>

    @endforeach

@endif

@if(session('success'))
    <div class=" text-center alert alert-success">

             {{session('success')}}
    </div>

@endif

@if(session('error'))
    <div class="tetx-center alert alert-danger">
        {{session('error')}}
    </div>

@endif
