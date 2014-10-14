@extends('layouts.master')

@section('title')
    Log In
@stop

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        {{ Form::open(array('action' => 'HomeController@doLogin')) }}
        <div class="form-group">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'example@email.com')) }}
            
            {{ $errors->first('email', '<span class="alert alert-danger alert-dismissible help-block"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            
            {{ $errors->first('password', '<span class="alert alert-danger alert-dismissible help-block"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
        </div>
        
        <div class="form-group">
            {{ Form::submit('SIGN IN', array('class' => 'btn btn-md btn-outline')) }}
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop