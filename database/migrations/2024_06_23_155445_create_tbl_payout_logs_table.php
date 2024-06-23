<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_payout_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paydata_id');
            $table->datetime('payout_log_requested_at');
            $table->datetime('payout_log_done_at');
            $table->timestamps();

            $table->foreign('paydata_id')->references('paydata_id')->on('tbl_payouts_datas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_payout_logs');
    }
};
