<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\Task;

class TaskController extends Controller
{
public function showTasks()
{
    $tasks = DB::table('tasks')->get();
    dd($tasks);
}

/*public function store(Request $request)
{
    $task = new Task();
    $task->Title = $request->input('Title');
    $task->save();
    return redirect('/tasks');
}
public function show(Task $task)
{
    return view('tasks', compact('tasks'));
}
public function update(Request $request, Task $task)
{
    $task->title = $request->input('Title');
    // other fields
    $task->save();

    return redirect('/tasks/' . $task->id);
}*/

}
