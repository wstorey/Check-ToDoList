@extends('master')
@section('title') Update Item @endsection

@section('content')
    <div class="form-group">
        <form method="POST" action="
        {{ action('ItemController@update', $item->id) }}">
            {{ method_field('PATCH') }}
            @include('partials.createForm',
            ['buttonName' => 'Update',
             'name' => $item->name,
             'title' => 'Update Item'])
        </form>
        @include('partials.errors')
    </div>
@endsection
