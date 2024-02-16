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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('firstname');
            $table->enum('gender', ['Masculin', 'Feminin','Non reconnu'])->nullable()->default('Non reconnu');
            $table->date('birthday')->nullable();
            $table->string('birthplace')->nullable();
            $table->enum('civil_status', ['Celibataire', 'Marié(e)','Non reconnu'])->default('Non reconnu');;
            $table->string('contact')->unique()->nullable();;
            $table->string('address')->nullable();
            $table->string('picture')->nullable();
            $table->string('identity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
