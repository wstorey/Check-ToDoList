@extends('master')
@section('title') To Do's @endsection

@section('content')

    <h1>List Manager</h1>
    <table class="table table-striped">
        <tbody>
            @foreach($todos as $todo)
            <tr>
                <td><a href="todos/{{ $todo->id }}">{{ $todo->name }}</a></td>
                <td><button class="btn btn-primary" href="#">Update Name</button></td>
                <td><button class="btn btn-danger" href="#">Delete ToDo</button></td>
                <td>{{ $todo->user_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$todo}}
@endsection

