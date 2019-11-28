@extends('master')
{{--@section('title') {{ $todo->name }} @endsection--}}
@section('title') Check @endsection

@section('content')
    {{ session(['todo_id' => $todo->id]) }}
    <h1>{{ $todo->name }}</h1>
    <table class="table table-striped">
        <tbody>
            @foreach($todo->items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ action('ItemController@edit', $item->id) }}"><button class="btn btn-primary">Update Item</button></a>
                    </td>
                    <td>
                        <form method="post" action="{{ action('ItemController@destroy', $item->id) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-danger" type="submit">Delete Item</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="form-inline">
        <form method="POST" action="{{action ('ItemController@store')}}">
            @include('partials.createForm',
            ['buttonName' => 'Add Item',
             'name' => old('name'),
             'title' => 'Add New Item'])
        </form>
        @include('partials.errors')
    </div>
@endsection

