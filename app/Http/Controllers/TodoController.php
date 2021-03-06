<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;
use Illuminate\Http\Request;
//use App\Illuminate\Support\Facades\Auth;
use Auth;

class TodoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $todos = Auth::User()->todos;
        return view('todos.index', compact('todos'));
    }

    public function show(Todo $todo)
    {
        $todos = Auth::User()->todos;
        foreach($todos as $todoFromArray) {
            if($todoFromArray->id == $todo->id) {
                return view('todos.show',compact('todo'));

            }
        }
        return redirect('todos');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoRequest $request)
    {
        $formData = $request->all();
        $formData['user_id'] = Auth::User()->id;
        Todo::create($formData);

        return redirect('todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit',compact('todo'));
    }

    public function update(TodoRequest $request, $todo)
    {
        $formData = $request->all();
        $todo = Todo::findOrFail($todo);
        $todo->update($formData);

        return redirect('todos');
    }

    public function destroy(Todo $todo)
    {

        $todo->items()->detach();
        $todo->delete();
        return redirect('todos');
    }
}
