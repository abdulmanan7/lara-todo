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
        // if ($validator->fails()) {
        //       return redirect('/')
        //       ->withInput()
        //       ->withErrors($validator);
        // }
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        return redirect('/');
    }
    public function delete(){
        $task->delete();
        return redirect('/');
    }
}
