<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $tasks = Task::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        if ($request->has('Hx-Request')) {
            return view('partials.matrix', compact('tasks'));
        }

        return view('home', compact('tasks'));
    }
}

