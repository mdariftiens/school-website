<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('bangla_title', 500);
            $table->string('english_title', 500);
            $table->longText('bangla_description')->nullable();
            $table->longText('english_description')->nullable();
            $table->tinyInteger('is_published')->default(0);
            $table->longText('bangla_venue')->nullable();
            $table->longText('english_venue')->nullable();
            $table->dateTime('from_datetime');
            $table->dateTime('to_datetime')->nullable();
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
        Schema::dropIfExists('events');
    }
}
