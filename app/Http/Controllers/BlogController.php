<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function getIndex() {
      $posts = Post::paginate(5);

      return view('blog.index')->withPosts($posts);
    }
}
