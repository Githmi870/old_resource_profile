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
        Schema::create('s_n_z_has_g_n_d_s', function (Blueprint $table) {
            $table->unsignedBigInteger('snz_id');
            $table->foreign('snz_id')->references('snz_id')->on('sensitive_nature_zones')->onDelete('cascade');
            $table->string('gnd_uid');
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
            $table->primary(['snz_id', 'gnd_uid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_n_z_has_g_n_d_s');
    }
};
