<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $tasks = Task::all();

        if ($request->has('Hx-Request')) {
            return view('partials.matrix', compact('tasks'));
        }

        return view('home', compact('tasks'));
    }
}

