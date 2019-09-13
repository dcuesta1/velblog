<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('identifier')->index();
            $table->bigInteger('user_id');
            $table->string('slug')->unique()->index();
            $table->string('title');
            $table->text('body');
            $table->integer('status')->default(1);
            $table->timestamp('publish_on')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}