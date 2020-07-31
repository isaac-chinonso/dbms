<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('subject');
            $table->string('author');
            $table->integer('department_id');
            $table->string('type');
            $table->text('description');
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
        Schema::dropIfExists('libaries');
    }
}
