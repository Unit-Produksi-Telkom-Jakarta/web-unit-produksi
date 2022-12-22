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
        Schema::create('forms', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('client_id');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('no_handphone');
            $table->string('alamat');
            $table->string('pic');
            $table->string('request');
            $table->string('mulai');
            $table->string('selesai');
            $table->string('keterangan');
            $table->string('status');
            $table->string('jumlah');
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
        Schema::dropIfExists('forms');
    }
};
