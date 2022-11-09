<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateUnemployments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_unemployments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('address')->nullable();
            $table->string('parent_name')->nullable();
            $table->date('date')->nullable();
            $table->string('punongbarangay')->nullable();
            $table->string('hon_1')->nullable();
            $table->string('hon_2')->nullable();
            $table->string('hon_3')->nullable();
            $table->string('hon_4')->nullable();
            $table->string('hon_5')->nullable();
            $table->string('hon_6')->nullable();
            $table->string('hon_7')->nullable();
            $table->string('sk_chairman')->nullable();
            $table->string('secretary')->nullable();
            $table->string('treasurer')->nullable();
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
        Schema::dropIfExists('certificate_unemployments');
    }
}
