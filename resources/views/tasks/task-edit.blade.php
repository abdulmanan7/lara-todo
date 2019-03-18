@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ url('task/store') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}
            <input type="hidden" name="id" value="{{$task->id}}">
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task Title</label>

                <div class="col-sm-6">
                    <input type="text" value="{{$task->title}}" name="title" id="task-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task Status</label>
                <div class="col-sm-6">
                    <select name="status" id="inputstatus" class="form-control" required="required">
                        <option value="">--Status--</option>
                        <option <?=$task->status=="ACTIVE"?"selected=selected":""?> value="ACTIVE">Active</option>
                        <option <?=$task->status=="DONE"?"selected=selected":""?> value="DONE">Done</option>
                        <option <?=$task->status=="DELECTED"?"selected=selected":""?> value="DELECTED">Deleted</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Description</label>

                <div class="col-sm-6">
                    <textarea name="description" id="inputdescription" class="form-control" rows="3" required="required">{{$task->description}}</textarea>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Update Task
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection