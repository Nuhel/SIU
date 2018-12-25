<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_title')->nullable(false);
            $table->string('course_code')->nullable(false);
            $table->string('course_credit')->nullable(false);
            $table->string('discipline')->nullable(false);
            $table->string('semester')->nullable(false);
            $table->string('isActive')->nullable(false);
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
        Schema::dropIfExists('Subjects');
    }
}
