<?php

declare(strict_types=1);

use App\Models\Personne;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table): void {
            $table->id();
            $table->date('date')->nullable();
            $table->enum('type', ['Politique', 'Administratif','Autres'])->nullable();
            $table->enum('status', ['NU', 'Politique','Stagiaire','Autres','non reconnu'])->nullable();
            $table->enum('state', ['Actif', 'Inactif','Passif'])->nullable();
            $table->string('document')->nullable();
            $table->foreignIdFor(Personne::class)->constrained()->cascadeOnDelete();
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
