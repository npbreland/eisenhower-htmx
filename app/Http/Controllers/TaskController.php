<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $task = new Task;
        $task->title = $request->title;
        $task->category = 'do';
        $task->save();
        return redirect('/', 303);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $task = Task::findOrFail($task->id);
        $task->category = $request->category;
        $task->save();

        return redirect('/', 303);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task = Task::findOrFail($task->id);
        $task->delete();
        return redirect('/', 303);
    }
}
