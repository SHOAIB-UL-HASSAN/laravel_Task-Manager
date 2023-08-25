<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\Task;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    public function index()
    {
        $todos = DB::table('tasks')->get();
         return view('Tasks', ['tasks' => $todos]);
    }

    
    public function store(Request $request)
    {
        // store the data
        DB::table('todos')->insert([
            'task' => $request->task
        ]);
    
        // redirect
        return redirect('/')->with('status', 'Task added!');
    }
    }

    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tasks')->where('id', $id)->update([
            'tasks' => $request->task
        ]);
    
        // redirect
        return redirect('/Task')->with('status', 'Task updated!');
    }

    public function destroy($id)
    {
        DB::table('todos')->where('id', $id)->delete();

    // redirect
    return redirect('/')->with('status', 'Task removed!');
}
    }
}
/*public function showTasks(){
    $tasks = DB::table('tasks')->get();
    return $tasks;
}
/*public function SingleUser(){
    $tasks=DB::table('tasks')->where('Title')->get();
    return $tasks;
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
