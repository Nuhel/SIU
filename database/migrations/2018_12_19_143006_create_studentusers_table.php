<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('studentuser', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('s_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken(); 
            $table->timestamp('updateRequest')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('studentuser');
    }
}
