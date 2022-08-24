<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->id();
            $table->string('type',200);
            $table->string('bangla_title',200);
            $table->string('english_title',200);
            $table->boolean('header_show_hide')->default(1);

            $table->string('header_template',200)->nullable();
            $table->string('header_background_color')->nullable();
            $table->string('header_text_color')->nullable();
            $table->string('header_hover_color')->nullable();
            $table->string('content_background_color')->nullable();
            $table->string('content_text_color')->nullable();
            $table->string('content_hover_color')->nullable();

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
        Schema::dropIfExists('widgets');
    }
};
