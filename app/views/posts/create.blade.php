@extends('layouts.master')

@section('title')
    Create a New Post
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h1>@yield('title')</h1>
        {{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}

        @include('posts.form')

        {{ Form::reset('CLEAR', array('class' => 'actionButtons btn btn-md btn-outline btn-omg')) }}
        {{ Form::submit('SUBMIT', array('class' => "actionButtons btn btn-md btn-outline")) }}

        {{ Form::close() }}
    </div>
@stop