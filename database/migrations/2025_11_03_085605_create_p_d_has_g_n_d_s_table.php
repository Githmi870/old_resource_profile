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
        Schema::create('p_d_has_g_n_d_s', function (Blueprint $table) {
            $table->string('pd_code');
            $table->string('gnd_uid');
            $table->primary(['pd_code', 'gnd_uid']);
            $table->foreign('pd_code')->references('pd_code')->on('polling_divisions')->onDelete('cascade');
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_d_has_g_n_d_s');
    }
};
