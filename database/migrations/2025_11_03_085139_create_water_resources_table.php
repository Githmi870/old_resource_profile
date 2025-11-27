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
        Schema::create('water_resources', function (Blueprint $table) {
            $table->id('wr_id');
            $table->string('wr_name');
            $table->string('wr_type');
            $table->string('normalized_name')->nullable()->index();
            $table->unique(['normalized_name', 'wr_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_resources');
    }
};
