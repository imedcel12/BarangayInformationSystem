<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateClearances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_clearances', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('purok_address')->nullable();
            $table->string('reason')->nullable();
            $table->string('or_number')->nullable();
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
        Schema::dropIfExists('certificate_clearances');
    }
}
