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
        Schema::create('goverment_figures', function (Blueprint $table) {
            $table->id('gf_id');
            $table->string('gf_name');
            $table->string('gf_type');
            $table->string('gf_address');
            $table->string('gnd_uid');
            $table->foreign('gnd_uid')->references('gnd_uid')->on('grama_niladari_divisions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goverment_figures');
    }
};
