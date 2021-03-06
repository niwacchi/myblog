<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
  public function index() {
    $posts = Post::latest()->get();
    //$posts = [];
    //dd($posts->toArray());
    // return view('posts.index', ['posts', $posts]);
    return view('posts.index')->with('posts', $posts);
  }

  public function show(Post $post){
    //$posts = Post::findOrFali($id);
    return view('posts.show')->with('post', $post);
  }

  public function create(){
    $grp1 = 'rdo1';
    $id = '1';

    return view('posts.create',  ['grp1' => $grp1, 'id' => $id]);
  }

  public function store(PostRequest $request){
    $post = new Post();

    dd($request);

    if(Input::get('add1')) {
      $post->title = $request->title;
      $post->body = $request->body;
    } else if(Input::get('add2')) {
      $post->title = $request->title2;
      $post->body = $request->body2;
    }
    
    $post->save();
    return redirect('/');
  }

  public function edit(Post $post){
    return view('posts.edit')->with('post', $post);
  }

  public function update(PostRequest $request, Post $post){
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    return redirect('/');
  }

  public function destroy(Post $post){
    $post->delete();
    return redirect('/');
  }
}
