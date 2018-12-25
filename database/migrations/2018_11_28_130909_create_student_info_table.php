<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name')->nullable(false);
            $table->string('picture')->nullable(false);
            $table->string('fathers_name')->nullable(false);
            $table->string('mothers_name')->nullable(false);
            $table->string('dob')->nullable(false);
            $table->string('registration_number')->nullable(false);
            $table->string('academic_year')->nullable(false);
            $table->string('discipline')->nullable(false);
            $table->string('roll_number')->nullable(false);
            $table->string('doa')->nullable(false);
            $table->string('emargency_contact_address')->nullable(false);
            $table->string('emargency_contact_number')->nullable(false);
            $table->string('permanent_address')->nullable(false);
            $table->string('permanent_address_number')->nullable(false);
            $table->string('mailing_address')->nullable(false);
            $table->string('mailing_address_number')->nullable(false);
            $table->string('legal_guardian_name')->nullable(true);
            $table->string('legal_guardian_address')->nullable(true);
            $table->string('legal_guardian_phone_number')->nullable(true);
            $table->string('personal_email')->nullable(false);
            $table->string('authorized_email')->nullable(false);
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
        Schema::dropIfExists('student_info');
    }
}
