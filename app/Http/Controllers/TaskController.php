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
        $task->user_id = auth()->user()->id;
        $task->save();
        return redirect('/', 303);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        if ($task->user_id !== auth()->user()->id) {
            return redirect('/', 403);
        }

        $request->validate([
            'category' => 'required',
        ]);

        $task->category = $request->category;
        $task->save();

        return redirect('/', 303);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        if ($task->user_id !== auth()->user()->id) {
            return redirect('/', 403);
        }
        $task->delete();
        return redirect('/', 303);
    }
}
