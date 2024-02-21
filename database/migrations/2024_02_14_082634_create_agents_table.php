<?php

declare(strict_types=1);

use App\Contract\Enums\AgentStateEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table): void {
            $table->id();
            $table->date('date')->nullable();
            $table->enum('type', ['Politique', 'Administratif', 'Autres'])
                ->default('Autres');
            $table->enum('status', ['NU', 'Politique', 'Stagiaire', 'Autres', 'non reconnu'])
                ->default('non reconnu');
            $table->enum('state', ['Actif', 'Inactif', 'Passif'])
                ->default(AgentStateEnum::PASSIF->value);
            $table->string('document')->nullable();
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
