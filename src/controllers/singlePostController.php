<?php

namespace dcuesta1\Velblog\Controllers;

use dcuesta1\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    // public function __invoke(Request $request)
    // {
    //     return view('vendor.velblog.singlePost', ['post' => Post::where('slug', $slug)]);
    // }
    public function index(Request $request)
    {
        return view('vendor.velblog.singlePost', ['post' => Post::where('slug', $slug)]);
    }
}
