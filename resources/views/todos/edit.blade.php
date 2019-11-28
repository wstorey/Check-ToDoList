@extends('master')
@section('title') Edit @endsection

@section('content')
    <div class="form-group">
        <form method="POST" action="
        {{ action('TodoController@update', $todo->id) }}">
        {{ method_field('PATCH') }}
            @include('partials.createForm',
            ['buttonName' => 'Update',
             'name' => $todo->name,
             'title' => 'Update Item'])
        </form>
        @include('partials.errors')
    </div>
@endsection
