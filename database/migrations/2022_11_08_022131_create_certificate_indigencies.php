<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateIndigencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_indigencies', function (Blueprint $table) {
            $table->id();
            $table->string('punongbarangay');
            $table->string('hon_1');
            $table->string('hon_2');
            $table->string('hon_3');
            $table->string('hon_4');
            $table->string('hon_5');
            $table->string('hon_6');
            $table->string('hon_7');
            $table->string('sk_chairman');
            $table->string('secretary');
            $table->string('treasurer');
            $table->string('amount_paid');
            $table->string('or_number');
            $table->date('date_paid');
            //content//
            $table->string('address');
            $table->string('name');
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
        Schema::dropIfExists('certificate_indigencies');
    }
}
