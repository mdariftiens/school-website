<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('featured_image_link');
            $table->string('bangla_title');
            $table->string('english_title');
            $table->string('slug')->unique();
            $table->text('bangla_description');
            $table->text('english_description');
            $table->enum('status',['draft','published']);
            $table->enum('type',['post','page']);
            $table->enum('visibility',['public','private']);
            $table->timestamps();
            $table->softDeletes();
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
