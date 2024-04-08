<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_gebruiker', function (Blueprint $table) {
            $table->integer('id', true)->primary()->unsigned();
            $table->integer('role', 30);
            $table->integer('voornaam', 100);
            $table->string('adres', 100);
            $table->string('postcode', 6);
            $table->string('woonplaats', 30);
            $table->string('telefoon', 10);
            $table->string('email', 100);
            $table->string('wachtwoord', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_gebruiker');
    }
};
