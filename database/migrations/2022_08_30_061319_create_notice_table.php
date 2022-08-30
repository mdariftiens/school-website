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
            $table->tinyText('title')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->tinyText('icon_url')->nullable();
            $table->dateTime('published_datetime');
            $table->tinyInteger('is_ticker');
            $table->tinyText('ticker_link');
            $table->tinyInteger('is_featured')->default('0');
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
