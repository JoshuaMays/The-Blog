<?php

class PostsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('posts.index', [
            'posts' => Post::orderBy('id', 'asc')->paginate(6)
        ]);
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
        return View::make('posts.show', [
            'post' => Post::find($id)
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

            return Redirect::back()->withInput()->withErrors($validator);
        } else {

            $post->title = Input::get('title');
            $post->content = Input::get('content');
            $post->save();
            
            $id = $post->id;

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
        return "BOOM! Resource deleted!";
    }


}
