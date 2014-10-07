@extends('layouts.master')

@section('title')
    Create A Post
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h1>Create a New Post</h1>
        <form action="{{{ action('PostsController@store') }}}" method="POST" role="form">
        
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{{ Input::old('title') }}}" placeholder="Enter Blog Post Title">
            </div>
            
            <div class="form-group">
                <label for="content">Body</label>
                <textarea class="form-control" name="content" id="content" rows="15" placeholder="Your blog post text here">{{{ Input::old('content') }}}</textarea>
            </div>
            
            <button type="submit" class="btn btn-md btn-outline">SUBMIT</button>
        </form>
    </div>
@stop