@extends('master')
@section('title') To Do's @endsection

@section('content')

    <h1>List Manager</h1>
    <table class="table table-striped">
        <tbody>
            @foreach($todos as $todo)
            <tr>
                <td><a href="todos/{{ $todo->id }}">{{ $todo->name }}</a></td>
{{--                <td><a href="{{ url('todos/' . $todo->id) }}">{{ $todo->name }}</a></td>--}}
                <td>
                    <a href="{{ action('TodoController@edit', $todo->id) }}"><button class="btn btn-primary">Update Name</button></a>
                </td>

                <td>
                    <form method="post" action="{{ action('TodoController@destroy', $todo->id) }}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="btn btn-danger" type="submit">Delete To Do</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="form-group">
        <form method="POST" action="{{action ('TodoController@store')}}">
            @include('partials.createForm',
            ['buttonName' => 'Add To Do',
             'name' => old('name'),
             'title' => 'Add New To Do'])
        </form>
        @include('partials.errors')
    </div>

@endsection

