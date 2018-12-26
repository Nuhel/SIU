<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('phone')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('designation')->nullable(false);
            $table->string('nominated_by')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->string('type')->nullable(false);
            $table->string('position')->nullable(true);
            $table->string('status')->nullable(true);
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
        Schema::dropIfExists('authorities');
    }
}
