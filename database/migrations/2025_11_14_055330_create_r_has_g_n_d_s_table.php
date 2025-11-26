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
        Schema::create('r_has_g_n_d_s', function (Blueprint $table) {
            $table->unsignedBigInteger('r_id');
            $table->string('gnd_uid');
            $table->string('r_importance');
            $table->string('r_is_used');
            $table->primary(['r_id', 'gnd_uid']);
            $table->foreign('r_id')->references('r_id')->on('resources')->onDelete('cascade');
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_has_g_n_d_s');
    }
};
