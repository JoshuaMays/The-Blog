@extends('layouts.master')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date Posted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr id="post-row-{{{ $post->id }}}">
                <td>{{{ $post->title }}}</td>
                <td>{{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</td>
                <td>{{{ $post->created_at->format(Post::SHORT_DATE_FORMAT) }}}</td>
                <td>
                    <div class="btn-group">
                        {{ link_to_action('PostsController@edit', 'Edit', $post->id, array('class' => 'btn btn-default')) }}
                        <button type="button" class="btn btn-danger delete-btn" data-post-id="{{{ $post->id }}}">Delete</button>
                    </div>
                </td>
            </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>

@stop

@section('bottom-script')
    <script>
        var csrfToken = "{{{ Session::get('_token') }}}";
    
        $(".delete-btn").click(function()
        {
            var postId = $(this).data('post-id');
            
            if(confirm('Are you sure that you want to delete the post?')) {
                $.ajax({
                    url: '/posts/' + postId,
                    type:'post',
                    data: {
                        _token: csrfToken,
                        _method: 'delete'
                    },
                    success: function(data) {
                        if (data.success) {
                            alert(data.message);
                            $("#post-row-" + postId).fadeOut(1000);
                        }
                    }
                });
            }
        });
    </script>
    
@stop