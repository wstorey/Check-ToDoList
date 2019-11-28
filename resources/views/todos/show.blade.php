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
                        <button class="btn btn-primary" href="#"><a href="{{ action('ItemController@edit', $item->id) }}">Update Item</a></button>
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

    <div class="form-group">
        <form method="POST" action="{{action ('ItemController@store')}}">
            @include('partials.createForm',
            ['buttonName' => 'Create',
             'name' => old('name'),
             'title' => 'Add New Item'])
        </form>
    </div>
@endsection

