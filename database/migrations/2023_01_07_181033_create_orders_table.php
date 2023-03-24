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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); //pembuat 
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->foreignId('employee_id'); //penanggung jawab
            $table->integer('pic');
            $table->string('request');
            $table->date('start_estimation');
            $table->date('end_estimation');
            $table->string('description');
            $table->integer('status');
            $table->foreignId('invoice_id'); //invoice
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
        Schema::dropIfExists('orders');
    }
};
