<?php

use Conner\Tagging\TaggableTrait;

class Post extends BaseModel
{
    const DATE_FORMAT = 'l, jS \\of F Y g:i A';
    const SHORT_DATE_FORMAT = 'l, jS \\of F Y';

    // FORM FIELD RESTRICTIONS FOR CREATING/EDITING POSTS
    public static $rules = array(
        'title' => 'required|max:255',
        'content' => 'required'
    );
    
    protected $table = 'posts';
    
    protected $fillable = ['title', 'content', 'image_path'];
    
    public function user()
    {
        return $this->belongsTo('User');
    }
}