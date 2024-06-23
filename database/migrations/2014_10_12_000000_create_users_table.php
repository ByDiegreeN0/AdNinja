<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('referral_link_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('referral_link_id')->references('id')->on('tbl_user_referral_links')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        DB::statement('SET foreign_key_checks=0');

        Schema::dropIfExists('users');
        DB::statement('SET foreign_key_checks=1');

    }
};
