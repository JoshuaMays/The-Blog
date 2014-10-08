@extends('layouts.master')

@section('title')
    Create A Post
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h1>Create a New Post</h1>
        {{ Form::open(array('action' => 'PostsController@store')) }}
            
            <div class="form-group">
                {{ Form::label('title', 'Post Title') }}
                {{ Form::text('title', Input::old('title'), array('class' =>'form-control', 'placeholder' => "Enter Blog Post Title")) }}
                
                {{ $errors->first('title', '<span class="alert alert-danger alert-dismissible help-block"><span class="icon-uniE604"></span><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
            </div>
            
            <div class="form-group">
                {{ Form::label('content', 'Content') }}
                {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control', 'placeholder' => 'Your blog post text here', 'rows' => '15')) }}
                
                {{ $errors->first('content', '<span class="alert alert-danger alert-dismissible help-block"><span class="icon-uniE604"></span><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
            </div>
            
            {{ Form::submit('SUBMIT', array('class' => "btn btn-md btn-outline")) }}
            
            <!-- <button type="submit" class="btn btn-md btn-outline">SUBMIT</button> -->
        {{ Form::close() }}
    </div>
@stop