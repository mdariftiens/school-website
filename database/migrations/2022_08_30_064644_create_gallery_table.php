<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->id();
            $table->string('english_title',500);
            $table->string('bangla_title',500);
            $table->text('english_description')->nullable();
            $table->text('bangla_description')->nullable();
            $table->enum('gallery_type',['Image','Video']);
            $table->tinyInteger('is_publish')->default(0);
            $table->tinyInteger('priority')->nullable();
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
        Schema::dropIfExists('gallery');
    }
}
