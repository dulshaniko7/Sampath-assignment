@extends('layouts.app')

@section('content')
<div class="container">
    Project show

    <h2 class="text-center mb-5">{{$project->project_code}} - {{$project->project_name}}</h2>

    <h4 class="text-center">Project Cost - {{number_format($project->projected_cost,2)}}</h4>
    <h4 class="text-center">Finish Date - {{$project->finish_date}}</h4>

        <a class="btn btn-primary" href="{{ route('projects.index') }}">
            Go Back
        </a>
    </div>
</div>
@endsection
