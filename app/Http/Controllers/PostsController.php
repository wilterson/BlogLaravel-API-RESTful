<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = "Todos os Posts";

        $posts = Post::all();

        return view('admin.posts', compact('titulo', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $titulo = "Criar novo post";
	    return view('admin.new-post', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['author'] = auth()->user()->id;

        Post::create($data);
	    return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!($post = Post::find($id))){
        	throw new ModelNotFoundException("Post não encontrado");
        }

        $titulo = "Editando Post";

        return view('admin.edit-post', compact('titulo', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	    if(!($post = Post::find($id))){
		    throw new ModelNotFoundException("Post não encontrado");
	    }

	    $data = $request->all();
	    $post->fill($data);
	    $post->save();

	    return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    if(!($post = Post::find($id))){
		    throw new ModelNotFoundException("Post não encontrado");
	    }

	    $post->delete();
	    return redirect()->route('posts.index');
    }
}
