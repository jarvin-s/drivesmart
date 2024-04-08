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
        Schema::create('_instructeur', function (Blueprint $table) {
            $table->integer('id', true)->primary()->unsigned();
            $table->string('voornaam', 50);
            $table->string('achternaam', 70);
            $table->string('wachtwoord', 255);
            $table->boolean('is_instructeur')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_instructeur');
    }
};
