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
            $table->integer('age');
            $table->integer('report_id');
            $table->integer('phone_number');
            $table->decimal('discount', $precision = 8, $scale = 2);
            $table->string('loctaion');
            $table->string('test_list');
            $table->string('ref_doctor');
            $table->string('CNIC');
            $table->date('degistor_date');
            $table->string('routine');
            $table->string('special');$table->timestamps();

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