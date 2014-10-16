@extends('layouts.master')

@section('title')
        Edit Post
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">

        <h3>Edit "{{{ $post->title }}}"</h3>
        {{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method' => 'put', 'files' => true)) }}

            @include('posts.form')
                {{ Form::reset('CLEAR', array('class' => 'actionButtons btn btn-md btn-outline btn-omg')) }}
                {{ Form::submit('SUBMIT', array('class' => 'actionButtons btn btn-md btn-outline')) }}
        {{ Form::close() }}
    </div>
@stop