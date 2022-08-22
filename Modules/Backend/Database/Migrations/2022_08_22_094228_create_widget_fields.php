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
        Schema::create('widget_fields', function (Blueprint $table) {
            $table->id();
            $table->integer('widget_id');
            $table->string('field_name',200);
            $table->text('field_value');
            $table->timestamps();

            $table->unique(['widget_id','field_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('widget_fields');
    }
};
