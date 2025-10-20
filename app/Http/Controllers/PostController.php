<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index',compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request){
        $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
    ]);
    Post::create([
        'title' => $request->title,
        'body' => $request->body,
        'user_id'=>Auth::id(),
    ]);
    return redirect()->route('posts.index')->with('success', 'Post created successfully!');

    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function myposts(){
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        return view('posts.my_posts', compact('posts'));
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        $post=Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return to_route('posts.show', $post->id)->with('success', 'Post updated successfully!');
    }
    public function destroy(string $id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return to_route('posts.my_posts');
    }
}
