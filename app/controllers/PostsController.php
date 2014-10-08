<?php

class PostsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::paginate(6);
        
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
        $validator = Validator::make(Input::all(), Post::$rules);
        
        if($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            
            $post = new Post();
            
            $post->title = Input::get('title');
            $post->content = Input::get('content');
            $post->save();

            return Redirect::action('PostsController@show', $post->id);
        }
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

        return View::make('posts.show')->with('post', $post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return "Displaying a form to edit a resource specified by ID: $id!";
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return "Updating the changes to the resource!";
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
