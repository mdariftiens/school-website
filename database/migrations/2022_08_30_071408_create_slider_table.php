<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->integer('sl');
            $table->tinyText('title')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('upload_type')->nullable();
            $table->tinyText('video_image_url')->nullable();
            $table->string('video_thumbnail')->nullable();
            $table->tinyText('link')->nullable();
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
        Schema::dropIfExists('slider');
    }
}
