<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $todo = Todo::get()->first();
        dd($todo->user->email);
        return view('todos.index', compact('todo'));
    }

    public function show(Todo $todo)
    {
        return view('todos.show',compact('todo'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoRequest $request)
    {
        $formData = $request->all();

        Todo::crete($formData);

        return view('todos.index');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit',compact('todo'));
    }

    public function update(TodoRequest $request, $todo)
    {
        $formData = $request->all();
        $todo = Todo::findOrFail($todo);
        $todo->update($formData);

        return redirect('todos.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->items()->delete();
        $todo->delete();

        return redirect('todos.index');
    }
}
