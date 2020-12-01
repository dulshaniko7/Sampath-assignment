@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
           <h5 class="welcome-text"> Hi  {{ Auth::user()->name }}</h5>
            <p id="greeting" class="welcome-text"></p>

        </div>
    </div>
</div>
<script>

    var today = new  Date();
    var hourNow = today.getHours();
    var greeting;
    if(today.getHours()>18){
        greeting = "Good Evening";

    }
    else  if(today.getHours()<12){
        greeting= "Good Morning ";
    }

    else if(today.getHours()<=18){
        greeting = "Good Afternoon ";
    }


    let msg = document.querySelector('#greeting')
msg.textContent = greeting
</script>
@endsection


