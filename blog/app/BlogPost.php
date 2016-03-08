<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table = 'posts'; // from our create_blog_posts migration DB table
    protected $fillable = ['post_title','post_content','author_name'];



}
