<div class="form-group">
    {{ Form::label('title', 'Post Title') }}
    {{ Form::text('title', Input::old('title'), array('class' =>'form-control', 'placeholder' => "Enter Blog Post Title")) }}
    
    {{ $errors->first('title', '<span class="alert alert-danger alert-dismissible help-block"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
</div>

<div class="form-group">
    {{ Form::label('content', 'Content') }}
    {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control', 'placeholder' => 'Your blog post text here', 'rows' => '15')) }}
    {{ Form::file('image') }}
    {{ $errors->first('content', '<span class="alert alert-danger alert-dismissible help-block"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> :message</span>') }}
</div>