@extends('layouts.master')

@section('title')
    {{{ $post->title }}}
@stop

@section('content')
        <div class="row">
            <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 well">
                <article>
                    <h2>{{{ $post->title }}}</h2>
                    
                    @if($post->image_path != null)
                    <img src="{{{ $post->image_path }}}" alt="{{{ $post->title }}}" class="blogImg">
                    @endif
                    
                    <p><small> {{{ 'Posted by: ' . $post->user->first_name . ' ' .$post->user->last_name }}} &mdash; {{{ $post->created_at->format(Post::DATE_FORMAT) }}}</small></p>
                    <p>{{{ $post->content }}}</p>
                </article>
            </div>
            <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
            @if(Auth::check())

                {{ link_to_action('PostsController@edit', "EDIT", $post->id, array('class' => 'actionButtons btn btn-xs btn-outline pull-left', 'role' => 'button')) }}
                {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => "delete", 'id' => 'deleteForm')) }}
                    {{ Form::submit('DELETE',['class'=>'actionButtons btn btn-xs btn-omg btn-outline pull-left']) }}
                {{ Form::close() }}

            @endif
            
            {{ link_to_action('PostsController@index', "BACK", null, array('class' => 'actionButtons btn btn-xs btn-outline pull-left', 'role' => 'button')) }}
            </div>
        </div>
@stop

@section('bottom-script')
    <script type="text/javascript">
        $("#deleteForm").submit(function(e)
        {
            if (!confirm('Are you sure?')) {
                e.preventDefault();
            }
        });
    </script>
@stop
