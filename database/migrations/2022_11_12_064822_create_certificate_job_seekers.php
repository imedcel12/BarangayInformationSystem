<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateJobSeekers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_job_seekers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('full_address')->nullable();
            $table->string('cert_validity')->nullable();
            $table->date('date')->nullable();
            $table->string('witness')->nullable();
            $table->string('punongbarangay');
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
            $table->string('receipt_num')->nullable();
            $table->string('amount_paid')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('certificate_job_seekers');
    }
}
