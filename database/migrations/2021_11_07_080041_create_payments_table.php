<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('enquiry_id');
            $table->string('course_id');
            $table->string('full_invoice_no')->nullable();
            $table->string('full_reference_no')->nullable();
            $table->string('full_payment')->nullable(); 
            $table->string('full_method')->nullable(); 
            $table->string('emi_first_invoice_no')->nullable();
            $table->string('emi_first_reference_no')->nullable();
            $table->string('emi_first_payment')->nullable(); 
            $table->string('emi_first_method')->nullable(); 
            $table->string('emi_second_invoice_no')->nullable();
            $table->string('emi_second_reference_no')->nullable();
            $table->string('emi_second_payment')->nullable(); 
            $table->string('emi_second_method')->nullable();
            $table->string('balance');
            $table->string('status');
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
        Schema::dropIfExists('payments');
    }
}
