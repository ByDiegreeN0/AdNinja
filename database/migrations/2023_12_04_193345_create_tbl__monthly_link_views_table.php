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
        Schema::create('tbl_monthly_link_views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('url_id');
            $table->integer('monthly_views')->default(0);
            $table->year('year');
            $table->unsignedTinyInteger('month');
            $table->timestamps();

            $table->foreign('url_id')->references('url_id')->on('tbl_links');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_monthly_link_views');
    }
};
