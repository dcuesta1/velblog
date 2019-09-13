<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePostModificationsTable extends Migration
{
    public function up()
    {
        Schema::create('post_modifications', function(Blueprint $table){
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->text('context');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('post_modifications');
    }
}