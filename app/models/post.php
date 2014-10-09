<?php

class Post extends Eloquent
{
    use Conner\Tagging\TaggableTrait;
    
    const DATE_FORMAT = 'l, jS \\of F Y g:i A';

    public static $rules = array(
        'title' => 'required|max:255',
        'content' => 'required'
    );
    protected $table = 'posts';
    
    protected $fillable = ['title', 'content'];
}