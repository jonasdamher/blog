<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('web.blog.index');
    }

    public function new($slug)
    {
        return view('web.blog.new');
    }
}
