<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matric');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->date('dob');
            $table->string('gender');
            $table->integer('department_id');
            $table->string('address');
            $table->string('state');
            $table->string('religion');
            $table->string('nationality');
            $table->string('marital_status');
            $table->string('program');
            $table->string('year_admitted');
            $table->string('duration');
            $table->string('pics')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
