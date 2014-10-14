@extends('layouts.master')

@section('title')
        Edit Post
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">

        <h3>Edit "{{{ $post->title }}}"</h3>
        {{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'method' => 'put')) }}

            @include('posts.form')
            <div id="editButtons" class="form-group">
                {{ Form::reset('CLEAR', array('class' => 'btn btn-md btn-outline')) }}
                {{ Form::submit('SUBMIT', array('class' => 'btn btn-md btn-outline')) }}
            </div>
        {{ Form::close() }}
    </div>
@stop