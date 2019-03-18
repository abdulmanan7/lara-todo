<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskPostRequest;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::paginate(5);
        return view('tasks.tasks', [
            'tasks' => $tasks
        ]);
    }
    public function create(TaskPostRequest $request){
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        return redirect('/');
    }
    public function store(TaskPostRequest $request){
        $task = Task::find($request->id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $isUpdated = $task->save();
        if($isUpdated){
            return Redirect::back()->with('msg', 'Update successfull !');
        }else{
            return Redirect::back()->withErrors('err', 'Failed to update please try later.');
        }
    }
    public function update($taskId=NULL){
        if(!$taskId || !is_numeric($taskId)){
            return redirect('/')
              ->withInput()
              ->withErrors('err', 'Provided ID is not valid.');
        }
        $task = Task::find($taskId);
        return view('tasks.task-edit', [
            'task' => $task
        ]);
    }
    public function delete($taskId){
        if(!$taskId || !is_numeric($taskId)){
            return redirect('/')
              ->withInput()
              ->withErrors('err', 'Provided ID is not valid.');
        }
        $task = Task::find($taskId);
        $isDeleted = $task->delete();
        if($isDeleted){
            return Redirect::back()->with('msg', 'Deletion successfull !');
        }else{
            return Redirect::back()->withErrors('err', 'Failed to delete please try later.');
        }
    }
}
