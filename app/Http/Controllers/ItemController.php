<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

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
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function edit()
    {
        //
    }


    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
