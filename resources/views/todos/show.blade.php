@extends('master')
{{--@section('title') {{ $todo->name }} @endsection--}}
@section('title') Check @endsection

@section('content')

    <h1>{{ $todo->name }}</h1>
    <table class="table table-striped">
        <tbody>
            @foreach($todo->items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td><button class="btn btn-primary" href="#">Update Item</button></td>
                    <td><button class="btn btn-danger" href="#">Delete Item</button></td>
                </tr>
            @endforeach
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

