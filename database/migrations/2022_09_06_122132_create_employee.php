<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('english_name');
            $table->string('bangla_name');
            $table->string('employee_identification_number')->nullable();
            $table->unsignedInteger('designation_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('employee_category_id')->nullable();
            $table->unsignedInteger('employee_type_id')->nullable();
            $table->string('english_description')->nullable();
            $table->string('bangla_description')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->string('blood_group')->nullable();
            $table->text('educational_qualification')->nullable();
            $table->string('major_subject')->nullable();
            $table->integer('priority')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
