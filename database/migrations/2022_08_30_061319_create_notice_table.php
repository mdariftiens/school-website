<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('bangla_title', 500);
            $table->string('english_title', 500);
            $table->tinyText('english_slug');
            $table->tinyText('bangla_slug');
            $table->text('bangla_description')->nullable();
            $table->text('english_description')->nullable();
            $table->tinyInteger('is_published')->default(0);
            $table->tinyText('featured_image_link')->nullable();
            $table->tinyText('thumbnail_image_link')->nullable();
            $table->dateTime('published_datetime');
            $table->tinyInteger('is_ticker')->default(0);
            $table->tinyText('ticker_link')->nullable();
            $table->tinyInteger('is_featured')->default(0);
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
        Schema::dropIfExists('notice');
    }
}
