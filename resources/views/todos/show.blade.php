@extends('master')
{{--@section('title') {{ $todo->name }} @endsection--}}
@section('title') Check @endsection

@section('content')

    <h1>{{ $todo->name }}</h1>
    <table class="table table-striped">
        <tbody>
{{--            @foreach($todo->items as $item)--}}
{{--                {{ $item }}--}}
{{--            @endforeach--}}
            {{--ITEM GOES HERE --}}
            <td><button class="btn btn-primary" href="#">Update Name</button></td>
            <td><button class="btn btn-danger" href="#">Delete To Do</button></td>
            <td>{{ $todo->user_id }}</td>
        </tbody>
    </table>


    <div class="form-group">
        <form method="POST" action="{{action ('TodoController@store')}}">
            @include('partials.createForm',
            ['buttonName' => 'Create',
             'name' => old('name'),
             'title' => 'Add New Item'])
        </form>
    </div>
@endsection

