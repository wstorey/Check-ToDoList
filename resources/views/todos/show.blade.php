@extends('master')
{{--@section('title') {{ $todo->name }} @endsection--}}
@section('title') Check @endsection

@section('content')

    <h1>{{ $todo->name }}</h1>
    <table class="table table-striped">
        <tbody>

        </tbody>
    </table>

@endsection

