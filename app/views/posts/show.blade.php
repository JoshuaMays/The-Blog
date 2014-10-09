@extends('layouts.master')

@section('title')
    {{{ $post->title }}}
@stop

@section('content')
        <div class="row">
            <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 well">
                <article>
                    <h2>{{{ $post->title }}}</h2>
                    <p>{{{ $post->content }}}</p>
                    <p><small>{{{ $post->created_at->setTimezone('America/Chicago')->format(Post::DATE_FORMAT) }}}</small></p>
                </article>
                {{ link_to_action('PostsController@edit', "EDIT", $post->id, array('class' => 'btn btn-xs btn-outline', 'role' => 'button')) }}
            </div>
        </div>
@stop

@section('footer')
    {{ link_to_action('PostsController@index', 'BACK', null, array('id' => 'indexLink', 'class' => 'btn btn-xs btn-outline')) }}
@stop