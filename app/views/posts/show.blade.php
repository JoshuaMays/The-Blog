@extends('layouts.master')

@section('title')
    {{{ $post->title }}}
@stop

@section('content')
        <div class="row">
            <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 well">
                <article>
                    <h2>{{{ $post->title }}}</h2>
                    <p><small> {{{ 'posted by: ' . $post->user->first_name . ' ' .$post->user->last_name }}}<br>{{{ $post->created_at->format(Post::DATE_FORMAT) }}}</small></p>
                    <p>{{{ $post->content }}}</p>
                </article>
                    {{ link_to_action('PostsController@edit', "EDIT", $post->id, array('class' => 'btn btn-xs btn-outline pull-left', 'role' => 'button')) }}
                    {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => "delete", 'id' => 'deleteForm')) }}
                        {{ Form::submit('DELETE',['class'=>'btn btn-xs btn-omg btn-outline pull-left']) }}
                    {{ Form::close() }}
            </div>
        </div>
@stop

@section('footer')
    {{ link_to_action('PostsController@index', 'BACK', null, array('id' => 'indexLink', 'class' => 'btn btn-xs btn-outline')) }}
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
