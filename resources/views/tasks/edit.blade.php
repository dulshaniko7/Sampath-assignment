@extends('layouts.app')

@section('content')
<div class="container">

    <form class="form-label-left input_mask" method="post"  id='formID' action="{{ route('tasks.update',$task->id)}}">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Task</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="task_name">Task Name</label>
                                    <input type="text" class="form-control" name="task_name" id="task_name"
                                           placeholder="task Name" value="{{ old('task_name', $task->task_name) }}" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_id">Project</label>
                                    <select class="form-control " name="project_id" id="project_id" required>
                                        @foreach($projects as $p)
                                        <option value="{{$p->id}}" {{ $p->id == $p->id ? 'selected':''}}>{{ $p->project_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="finish_date">Finish Date</label>
                                    <input type="date" class="form-control" name="finish_date" id="finish_date"
                                           value="{{ old('finish_date', $task->finish_date) }}" >
                                </div>
                            </div>


                        </div>
                        <hr class="mt-1 mb-2">

                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-add-row">Edit</button>
                                <button class="btn btn-dark" type="reset" onclick="reset()">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>
</div>
<script>
    function reset() {
        document.getElementById('formID').reset();
    }
</script>
@endsection
