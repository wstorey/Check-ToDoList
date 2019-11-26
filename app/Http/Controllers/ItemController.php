<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('lists.index');
    }

    public function show(Item $item)
    {
        return view('item.show',compact('item'));
    }

    public function create()
    {
        return view('item.create');
    }


    public function store(ItemRequest $request)
    {
        $formData = $request->all();
        Item::create($formData);
        return ; //FIGURE OUT WHAT VIEW THIS SHOULD RETURN!
    }

    public function edit($item)
    {
        $itemFound = Item::findOrFail($item);
        return view('item.edit', compact('itemFound'));
    }


    public function update(ItemRequest $request, $item)
    {
        $formData = $request->all();
        $itemFound = Item::findOrFail($item);
        $itemFound->update($formData);
        return ; //FIGURE OUT WHAT VIEW THIS SHOULD RETURN!
    }

    public function destroy(Item $item)
    {
        $item->todos()->detach($item->todo_id);

            $item->delete();

        return ; //FIGURE OUT WHAT VIEW THIS SHOULD RETURN!
    }

    public function restore($item) {
        Item::withTrashed()->find($item)->restore();
        return ; //FIGURE OUT WHAT VIEW THIS SHOULD RETURN!
    }
}
