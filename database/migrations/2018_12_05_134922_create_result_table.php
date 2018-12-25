<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_history', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('s_id')->nullable(false);
            $table->string('semester')->nullable(false);
            $table->string('exam_semester')->nullable(false);
            $table->integer('course_id')->nullable(false);
            $table->float('gpa')->unsigned()->default(0);
            $table->string('grade')->nullable(false);
            $table->string('remarks')->nullable(false);
            $table->string('status')->nullable(false);
            $table->integer('should_show')->nullable(false);
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
        Schema::dropIfExists('result_history');
    }
}
