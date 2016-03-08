<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{

    // up() is called when you want to run this migration
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id'); // this will be the primary key
            $table->string('post_title'); // VARCHAR
            $table->string('author_name'); // VARCHAR
            $table->longText('post_content'); // LONGTEXT
            $table->timestamps(); // automatically adds create + update timestamps
        });
    }

    // down() is used to 'undo' up()
    public function down()
    {
            Schema::drop('posts'); // as we create the table in up(), to undo this would be to drop the table. (delete it)
    }
}
