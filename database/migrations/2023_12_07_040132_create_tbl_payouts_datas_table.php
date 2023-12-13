<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     // This function is supossed to be called tbl_payouts_data, but if I erase the "s" the program just explotes :D
    public function up(): void
    {
        Schema::create('tbl_payouts_datas', function (Blueprint $table) {
            $table->id('paydata_id');
            $table->string('paydata_email');
            $table->string('paydata_user_name');
            $table->string('paydata_phonenumber_prefix')->nullable();
            $table->integer('paydata_phonenumber')->nullable();
            $table->string('paydata_address')->nullable();
            $table->string('paydata_address_2')->nullable();
            $table->string('paydata_country')->nullable();
            $table->string('paydata_city')->nullable();
            $table->unsignedBigInteger('paydata_zip')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_payouts_datas');
    }
};
