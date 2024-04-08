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
        Schema::create('_lesblok', function (Blueprint $table) {
            $table->integer('id', true)->primary()->unsigned();
            $table->integer('instructeur_id')->unsigned();
            $table->foreign('instructeur_id')->references('id')->on('Instructeur')->onDelete('cascade');
            $table->integer('auto_id')->unsigned();
            $table->foreign('auto_id')->references('id')->on('Auto')->onDelete('cascade');
            $table->string('auto_kenteken', 6);
            $table->date('datum');
            $table->time('tijdblok');
            $table->integer('leerling_id')->unsigned()->nullable();
            $table->foreign('leerling_id')->references('id')->on('Leerling')->onDelete('cascade');
            $table->text('verslag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_lesblok');
    }
};
