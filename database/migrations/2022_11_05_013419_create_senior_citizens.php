<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeniorCitizens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senior_citizens', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('Active');
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('purok')->nullable();
            $table->string('street')->nullable();
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
        Schema::dropIfExists('senior_citizens');
    }
}
