<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->get();
        return view('task.index', compact('tasks'));
    }
}
