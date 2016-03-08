<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BlogPost;

class BlogController extends Controller
{
    //

    // Snippet from http://127.0.0.1/laravel-guide/public_html/step-by-steps-basic-app#snippet_8c9750c
    public function index()
    {

        $blog_posts = \App\BlogPost::all();

        return view("blog.index", array("posts" => $blog_posts));
    }


    public function post(BlogPost $post)
    {
        return view("blog.single", array("post"=>$post));
    }


}
