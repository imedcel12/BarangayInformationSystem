<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateResidencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_residencies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('residency_status')->nullable();
            $table->string('barangay')->nullable();
            $table->string('purok_number')->nullable();
            $table->date('date')->nullable();
            $table->string('punongbarangay')->nullable();
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
        Schema::dropIfExists('certificate_residencies');
    }
}
