<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Item;
use App\Todo;

class ItemController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('todo.index');
    }

    public function store(ItemRequest $request)
    {
        $todo_id = $request->session()->pull('todo_id');
        $test = Item::where('name',$request->name)->first();


        if (empty($test)){
            $todo = Todo::findOrFail($todo_id);
            $item = new Item($request->all());
            $item['todo_id']=$todo_id;
            $item->save();
            $item->todos()->syncWithoutDetaching($todo);
        }else{
            $item = Item::where('name',$request->name)->first();
            $todo = Todo::findOrFail($todo_id);
            $item->todos()->syncWithoutDetaching($todo);
        }
        return redirect()->action('TodoController@show', $todo_id);

    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }


    public function update(ItemRequest $request, $item)
    {
        $formData = $request->all();
        $itemFound = Item::findOrFail($item);
        $itemFound->update($formData);
        return redirect()->action('TodoController@show', $itemFound->todo_id);
    }

    public function destroy(Item $item)
    {
        $todo_id = session()->pull('todo_id');
//        dd($todo_id, $item, $item->todos()->detach($todo_id));
//        dd($todo_id, $item);
        $item->todos()->detach($todo_id);
        return redirect()->action('TodoController@show', $todo_id);
    }

    public function restore($item) {
        Item::withTrashed()->find($item)->restore();
        return view('welcome');
    }
}
