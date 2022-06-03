<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('f_name');
            $table->integer('age');
            $table->string('gender');
            $table->string('email');
            $table->integer('report_id');
            $table->integer('phone_number');
            $table->string('discount');
            $table->string('loctaion');
            $table->string('test_list');
            $table->integer('lab_no');
            $table->string('ref_doctor');
            $table->string('CNIC');
            $table->date('registor_date');
            $table->string('specialorroutine');
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
        Schema::dropIfExists('patients');
    }
};
