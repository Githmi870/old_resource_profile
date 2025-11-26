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
        Schema::create('s_p_has_g_n_d_s', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_id');
            $table->string('gnd_uid');
            $table->foreign('sp_id')->references('sp_id')->on('safety_places')->onDelete('cascade');
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
            $table->primary(['sp_id','gnd_uid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_p_has_g_n_d_s');
    }
};
