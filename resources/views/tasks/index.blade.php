@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-2"> All Tasks</h2>
    <a href="{{ route('tasks.create')}}" class="btn btn-primary" style="float: right">Add New</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task Name</th>
            <th scope="col">Finish Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $t)
        <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->task_name }}</td>
            <td>{{$t->finish_date}}</td>
            <td><a class="btn btn-primary" href="{{ route('tasks.show',$t->id)}}">View</a>
                <a class="btn btn-success " href="{{ route('tasks.edit',$t->id)}}">Edit</a>
                <form action="{{ route('projects.destroy', $t->id) }}" method="POST"
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
