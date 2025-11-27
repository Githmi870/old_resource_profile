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
        Schema::create('l_g_d_has_g_n_d_s', function (Blueprint $table) {
            $table->string('gnd_uid');
            $table->string('lgd_uid');
            $table->primary(['lgd_uid','gnd_uid']);
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
            $table->foreign('lgd_uid')->references('lgd_uid')->on('local_government_divisions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_g_d_has_g_n_d_s');
    }
};
