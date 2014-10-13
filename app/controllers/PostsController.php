<?php

class PostsController extends \BaseController
{

    public function __construct()
    {
        parent::__construct();
        
        $this->beforeFilter('auth.basic', array('except' => array('index','show')));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at', 'DESC')->paginate(6);
        
        return View::make('posts.index')->with('posts', $posts);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $post = New Post();

        return $this->savePost($post);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        
        if(!$post) {
            App::abort(404);
        }
        
        return View::make('posts.show', [
            'post' => $post
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return View::make('posts.edit')->with('post', $post);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $post = Post::find($id);

        return $this->savePost($post);
    }

    protected function savePost(Post $post)
    {

        $validator = Validator::make(Input::all(), Post::$rules);

        if($validator->fails()) {
            $message = "Sorry, something went wrong.'?";
            
            Session::flash('errorMessage', $message);
            
            return Redirect::back()->withInput()->withErrors($validator);

        } else {

            $post->title = Input::get('title');
            $post->content = Input::get('content');
            $post->user_id = Auth::id();
            $post->save();

            $id = $post->id;

            $message = "CONGRATS IT WORKED";

            Session::flash('successMessage', $message);
            
            Log::info("A Create/Edit Form has been submitted", Input::all());

            return Redirect::action('PostsController@show', $id);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
        }
        catch(ModelNotFoundException $e) {
            App::abort(404);
        }
        
        $post->delete();
        Session::flash('successMessage', "You deleted: $post->title");
        
            return Redirect::action('PostsController@index');
        
    }
}
