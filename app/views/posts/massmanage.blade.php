@extends('layouts.master')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th id="deleteTableHead"><button type="button" class="btn btn-xs btn-danger delete-btn">Delete</button></th>
                <th>Title</th>
                <th>Author</th>
                <th>Date Posted</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr id="post-row-{{{ $post->id }}}">
                <td class="mass-delete-check">{{ Form::checkbox('delete-check', $post->id, false, array('class' => 'delete-check') ) }}
                <td id="post-title-{{{ $post->id }}}">{{{ $post->title }}}</td>
                <td>{{{ $post->user->first_name }}} {{{ $post->user->last_name }}}</td>
                <td>{{{ $post->created_at->format(Post::SHORT_DATE_FORMAT) }}}</td>
                <td>
                    <div class="btn-group">
                        {{ link_to_action('PostsController@edit', 'Edit', $post->id, array('class' => 'btn btn-default')) }}
                    </div>
                </td>
            </tr>
            @empty
                
            @endforelse
        </tbody>

    </table>

    {{  $posts->appends(Request::only(['tag','search']))->links() }}
@stop

@section('bottom-script')

<script>
    var csrfToken = "{{{ Session::get('_token') }}}";
    var fadeTimer = 500;
    $(".delete-btn").click(function()
    {
        $(".delete-check:checked").each(function(){

            var postId = $(this).val();
            var postTitle = $("#post-title-" + postId).text();
            
            if(confirm('Are you sure that you want to delete the post?')) {
                $.ajax({
                    url: '/posts/' + postId,
                    type: 'post',
                    data: {
                        _token: csrfToken,
                        _method: 'delete'
                    },
                    success: function(data) {
                        if (data.success) {
                            fadeTimer += 750;
                            alert(data.message);
                            $("#post-row-" + postId).fadeOut(fadeTimer);
                        }
                    }
                });
            }
        });
    });
</script>

@stop