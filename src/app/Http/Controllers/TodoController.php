<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }

    public function store(TodoRequest $request)
    {
        Todo::create($request->all());
        return redirect('/')->with(['message' => 'Todoを作成しました']);
    }

    public function update()
    {
        return redirect('/')->with(['message' => 'Todoを更新しました']);
    }
}
