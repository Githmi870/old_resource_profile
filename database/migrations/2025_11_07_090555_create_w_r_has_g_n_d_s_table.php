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
        Schema::create('w_r_has_g_n_d_s', function (Blueprint $table) {
            $table->unsignedBigInteger('wr_id');
            $table->string('gnd_uid');
            $table->primary(['wr_id', 'gnd_uid']);
            $table->foreign('wr_id')->references('wr_id')->on('water_resources')->onDelete('cascade');
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('w_r_has_g_n_d_s');
    }
};
