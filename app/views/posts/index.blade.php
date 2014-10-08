@extends('layouts.master')

@section('title')
    Viewing All Posts
@stop

@section('content')
    <div id="postsContainer" class="contentWrapper">
        @forelse ($posts as $post)
            <div class="row">
              <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 well">
                  <article>
                    <h3>{{{ $post->title }}}</h3>
                    <p>{{{ $post->content }}}</p>
                    <p><a href="/posts/{{{ $post->id }}}" class="btn btn-default" role="button">VIEW</a></p>
                  </article>
              </div>
            </div>
        @empty
            <p>LOLOLOL THERE ARE NO POSTS!</p>
        @endforelse
            {{  $posts->links() }}
    </div>
@stop