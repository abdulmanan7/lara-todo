<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskPostRequest;

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
        $task->save();
        return redirect('/');
    }
    public function update($taskId=NULL){
        if(!$taskId || !is_numeric($taskId)){
            return redirect('/')
              ->withInput()
              ->withErrors($validator);
        }
        $task = Task::find($taskId);
        return view('tasks.task-edit', [
            'task' => $task
        ]);
    }
    public function delete(){
        $task->delete();
        return redirect('/');
    }
}
