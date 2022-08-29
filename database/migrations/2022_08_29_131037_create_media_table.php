<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('bangla_title', 500)->nullable();
            $table->string('english_title', 500)->nullable();
            $table->string('bangla_alt_text', 500)->nullable();
            $table->string('english_alt_text', 500)->nullable();
            $table->text('bangla_description')->nullable();
            $table->text('english_description')->nullable();
            $table->string('filename', 500);
            $table->string('mimetypes', 100);
            $table->string('extension');
            $table->unsignedInteger('size');
            $table->string('disk_location',255);
            $table->string('url',255);
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
        Schema::dropIfExists('media');
    }
};
