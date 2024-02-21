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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->unique();
            $table->string('acronym', 10)->unique();
            $table->string('level', ['Direction', 'Division', 'Bureau', 'Cellule', 'Cabinet', 'Autre']);
            $table->enum('type', ['Politique', 'Administratif', 'Appui', 'Autre']);
            $table->foreignId('services_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
