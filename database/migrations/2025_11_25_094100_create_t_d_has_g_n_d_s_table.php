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
        Schema::create('t_d_has_g_n_d_s', function (Blueprint $table) {
            $table->unsignedBigInteger('td_id');
            $table->string('gnd_uid');
            $table->primary(['td_id','gnd_uid']);
            $table->foreign('td_id')->references('td_id')->on('tourist_destinations')->onDelete('cascade');
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_d_has_g_n_d_s');
    }
};
