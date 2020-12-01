@extends('layouts.app')

@section('content')
<div class="container">

    <form class="form-label-left input_mask" method="post" id='formID' action="{{ route('projects.store')}}">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Project</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_name">Project Name</label>
                                    <input type="text" class="form-control" name="project_name" id="project_name"
                                           placeholder="Project Name" value="">
                                    @if($errors->has('project_name'))
                                    <span class="help-block text-danger" role="alert">{{ $errors->first('project_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_code">Project Code</label>
                                    <input type="text" class="form-control" name="project_code" id="project_code"
                                           placeholder="Project code" value="">
                                    @if($errors->has('project_code'))
                                    <span class="help-block text-danger" role="alert">{{ $errors->first('project_code') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projected_cost">Project Cost</label>
                                    <input type="text" class="form-control" name="projected_cost" id="projected_cost"
                                           placeholder="Project Cost" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="finish_date">Finish Date</label>
                                    <input type="date" class="form-control" name="finish_date" id="finish_date"
                                           value="">
                                </div>
                            </div>


                        </div>
                        <hr class="mt-1 mb-2">

                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-add-row">Save</button>
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
