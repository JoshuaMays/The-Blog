@extends('layouts.master')

@section('content')

    <h1 class="text-center">ERRORMAGERD: 404 - PAGE NOT FOUND</h1>
    <div class="row">
        <div class="col-md-5">
            <img src="/img/error.jpg" alt="error" class="errorImage">
        </div>
        <div class="col-md-5 col-md-offset-1 well">
            <h3>You must be lost.</h3>
            <p>Click {{ link_to_action('PostsController@index', 'Here') }} to go home.</p>
        </div>
    </div>
@stop