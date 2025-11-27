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
        Schema::create('n_d_has_g_n_d_s', function (Blueprint $table) {
            $table->unsignedBigInteger('nd_id');
            $table->string('gnd_uid');
            $table->string('nd_period');
            $table->string('nd_solution');
            $table->foreign('nd_id')->references('nd_id')->on('natural_disasters')->onDelete('cascade');
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
            $table->primary(['nd_id','gnd_uid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n_d_has_g_n_d_s');
    }
};
