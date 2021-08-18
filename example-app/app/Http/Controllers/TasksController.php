<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('id', 'asc')->get();
        return view('task.index', compact('tasks'));
    }

    public function store(Request $request)
    {

        DB::table('tasks')->insert([
            'list' => $request->list
        ]);

        return back();
    }

    public function edit($id)
    {

        $tasks = DB::table('tasks')->where('id', $id)->first();

        return view('task.edit', ['task' => $tasks]);
    }

    public function update(Request $request, $id)
    {
        DB::table('tasks')->where('id', $id)->update([
            'list' => $request->list
        ]);

        return redirect('task');
    }

    public function destroy($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return back();
    }
}
