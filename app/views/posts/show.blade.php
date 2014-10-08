@extends('layouts.master')

@section('title')
    {{{ $post->title }}}
@stop

@section('content')
    <div class="container contentWrapper">
        <div class="row">
            <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 well">
                <article>
                    <h2>{{{ $post->title }}}</h2>
                    <p>{{{ $post->content }}}</p>
                </article>
            </div>
        </div>
    </div>
@stop