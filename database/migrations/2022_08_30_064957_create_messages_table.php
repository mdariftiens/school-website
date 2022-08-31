<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->tinyText('english_slug');
            $table->tinyText('bangla_slug');
            $table->tinyInteger('priority')->nullable();
            $table->string('english_title',500);
            $table->string('bangla_title',500);
            $table->string('english_name', 500)->nullable();
            $table->string('bangla_name', 500)->nullable();
            $table->tinyText('english_designation')->nullable();
            $table->tinyText('bangla_designation')->nullable();
            $table->longText('english_message')->nullable();
            $table->longText('bangla_message')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('messages');
    }
}
