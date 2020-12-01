@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-2"> All Projects</h2>
<a href="{{ route('projects.create')}}" class="btn btn-primary" style="float: right">Add New</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Project Code</th>
            <th scope="col">Project Name</th>
            <th scope="col">Project Cost</th>
            <th scope="col">Finish Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->project_code }}</td>
            <td>{{$p->project_name }}</td>
            <td>{{$p->projected_cost}}</td>
            <td>{{$p->finish_date}}</td>
            <td><a class="btn btn-primary" href="{{ route('projects.show',$p->id)}}">View</a>
                <a class="btn btn-success " href="{{ route('projects.edit',$p->id)}}">Edit</a>
                <form action="{{ route('projects.destroy', $p->id) }}" method="POST"
                      style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-xs btn-danger del_btn"
                           value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
