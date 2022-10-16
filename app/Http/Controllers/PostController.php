<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy("name")->get();
        $posts = Post::all();
        return view('posts.list', compact('categories', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy("name")->get();
        $post = new Post;
        return view('posts.add', compact("categories", "post"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $fields=$request->validated();
        $blog=new Post();
        $blog->fill($fields);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/posts_images');
            $blog->image = basename($image);
        }
        $blog->category_id = $fields["category"];
        $blog->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    /*****
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy("name")->get();
        return view('posts.edit', compact('categories','post'));
        #$categories = Category::orderBy("name")->get();
        #return view('posts.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $fields=$request->validated();
        $post->fill($fields);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/posts_images');
            $post->image = basename($image);
        }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post successfully updated');

        #$fields = $request->validated();
        #$post->fill($fields);
        #if ($request->hasFile('image')) {
        #    if (!empty($post->image)) {
        #        Storage::disk('public')->delete('posts_images/' . $post->image);
        #    }
        #    $img_path = $request->file('image')->store('public/posts_images');
         #   $post->image = basename($img_path);
        #}
        #$post->category_id = $fields['category'];
        #$post->save();
        #return redirect()->route('posts.index')->with('success', 'Post successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
            $post->delete();
            return redirect()->route('posts.index')->with('success', 'O Post foi eliminado com sucesso!');
    }

    public function posts()
    {
        #$posts = Post::orderBy("date", "desc")->paginate('10');
        #return view('posts', compact('posts'))->with('menuOption', 'P');
    }

}
