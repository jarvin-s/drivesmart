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
        Schema::create('auto', function (Blueprint $table) {
            $table->integer('id', true)->primary()->unsigned();
            $table->string('kenteken', 6);
            $table->string('merk', 30);
            $table->string('model', 50);
            $table->string('brandstof', 30);
            $table->boolean('heeft_cruise_control');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_auto');
    }
};
