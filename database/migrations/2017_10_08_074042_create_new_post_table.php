<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewPostTable extends Migration
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
            
            $table->string('title');
            $table->string('slug')->nullable();
            $table->longText('body')->nullable();
            $table->boolean('publish')->default(0);
            $table->integer('user_id')->unsigned();
            $table->boolean('show')->default(1);

            $table->string('facebook_share_id')->nullable();
            $table->string('twitter_share_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->text('tags')->nullable();

            $table->softDeletes();

            $table->timestamps();
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
