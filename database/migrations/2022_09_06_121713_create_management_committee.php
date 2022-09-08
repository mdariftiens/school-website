<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementCommittee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_committee', function (Blueprint $table) {
            $table->id();
            $table->string('english_name');
            $table->string('english_designation');
            $table->string('bangla_name');
            $table->string('bangla_designation');
            $table->string('contact_number');
            $table->string('email');
            $table->unsignedInteger('priority');
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
        Schema::dropIfExists('management_committee');
    }
}
