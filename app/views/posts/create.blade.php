@extends('layouts.master')

@section('title')
    Create a New Post
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h1>@yield('title')</h1>
        {{ Form::open(array('action' => 'PostsController@store')) }}

        @include('posts.form')
            
        
        {{ Form::reset('CLEAR', array('class' => 'btn btn-md btn-outline')) }}
        {{ Form::submit('SUBMIT', array('class' => "btn btn-md btn-outline")) }}

        {{ Form::close() }}
    </div>
@stop