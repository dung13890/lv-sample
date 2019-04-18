<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('alias', 400)->unique();
            $table->mediumText('introtext');
            $table->mediumText('fulltext');
            $table->text('images');
            $table->unsignedTinyInteger('featured')->default(0);
            $table->tinyInteger('published')->default(0);
            $table->unsignedInteger('user_id');
            $table->char('language', 7);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
