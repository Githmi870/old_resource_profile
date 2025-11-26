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
        Schema::create('abondened_government_buildings', function (Blueprint $table) {
            $table->id('ab_id');
            $table->string('ab_name');
            $table->string('ab_used_for');
            $table->string('ab_is_retrievable');
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
        Schema::dropIfExists('abondened_government_buildings');
    }
};
