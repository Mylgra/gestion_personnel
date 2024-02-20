<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personnes', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->enum('gender', ['Masculin', 'Feminin','Non reconnu'])->nullable()->default('Non reconnu');
            $table->date('birthday')->nullable();
            $table->string('birthplace')->nullable();
            $table->enum('civil_status', ['Celibataire', 'Marié(e)','Non reconnu'])->default('Non reconnu');
            ;
            $table->string('contact')->unique()->nullable();
            ;
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
        Schema::dropIfExists('personnes');
    }
};
