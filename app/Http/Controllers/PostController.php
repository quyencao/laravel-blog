<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('category')->paginate(5);
        $tags = Tag::withCount('posts')->has('posts')->orderBy('posts_count', 'desc')->limit(4)->get();
        $categories = Category::all();

        return view('blog.index', compact('posts', 'tags', 'categories'));
    }

    public function show($id) {
        $post = Post::with(['user', 'tags'])->find($id);
        $tags = Tag::withCount('posts')->has('posts')->orderBy('posts_count', 'desc')->limit(4)->get();
        $categories = Category::all();

        return view('blog.details', compact('post', 'tags', 'categories'));
    }

    public function getPostsTag($id) {
        $tag = Tag::find($id);
        $posts = $tag->posts()->paginate(5);
        $tags = Tag::withCount('posts')->has('posts')->orderBy('posts_count', 'desc')->limit(4)->get();
        $categories = Category::all();

        return view('blog.index', compact('posts', 'tags', 'categories'));
    }
}
