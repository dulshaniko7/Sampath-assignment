@extends('layouts.app')

@section('content')
<div class="container">
    Task show

    <h2 class="text-center mb-5">{{$task->task_name}}</h2>


    <h4 class="text-center">Finish Date - {{$task->finish_date}}</h4>

        <a class="btn btn-primary" href="{{ route('tasks.index') }}">
            Go Back
        </a>
    </div>
</div>
@endsection
