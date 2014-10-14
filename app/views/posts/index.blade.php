@extends('layouts.master')

@section('title')
    Viewing All Posts
@stop

@section('content')
        <h1 class="text-center">POSTS, POSTS, AND MAYBE SOME SPOTS</h1>
        
        @foreach(array_chunk($posts->all(), 2) as $row)
            <div class="row">
             @forelse($row as $post)
                <div class="col-sm-12 col-md-6">
                    <article class="well well-blog">
                        <h3>{{{ $post->title }}}</h3>
                        <p><small> {{{ 'posted by: ' . $post->user->first_name . ' ' .$post->user->last_name }}}</small></p>
                        <p><small>{{{ $post->created_at->format(Post::DATE_FORMAT) }}}</small></p>
                        <!-- LIMIT LENGTH OF BLOG PREVIEW TO 100 CHARS, IF LONGER ADD TO SUBSTRING ... -->
                        <p>{{{ str_limit($post->content, $limit = 100, $end = '...') }}}</p>
                        <p>{{ link_to_action('PostsController@show','VIEW', $post->id, array('class' => 'btn btn-xs btn-outline', 'role' => 'button')) }}</p>
                    </article>
                </div>
              @empty
                    <p>Yo, dere ain't no blog posts. How 'bout chu {{ link_to_action('PostsController@create', "POST") }} one.</p>
              @endforelse
            </div>
        @endforeach
        {{  $posts->appends(Request::only(['tag','search']))->links() }}
@stop


