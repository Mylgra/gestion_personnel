<?php

declare(strict_types=1);

use App\Models\Agent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('career_breaks', function (Blueprint $table): void {
            $table->id();
            $table->date('date');
            $table->enum('reason', ['Deces', 'Revocation', 'Retraite', 'Demission', 'Autre']);
            $table->string('document')->nullable();
            $table->foreignIdFor(Agent::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_breaks');
    }
};
