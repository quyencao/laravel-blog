<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class UserController extends Controller
{
    public function profile(Request $request) {
        $user = $request->user();

        return view('admin.profile', compact('user'));
    }

    public function post(Request $request) {
        $posts = Post::with('category')->where('user_id', Auth::id())->get();
        $user = $request->user();

        return view('admin.post', compact('posts', 'user'));
    }
}
