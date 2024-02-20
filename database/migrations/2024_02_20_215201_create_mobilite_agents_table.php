<?php

use App\Models\Agent;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobilite_agents', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('motif', ['Mise en disponibilité', 'Mise à la diposition','Detachement']);
            $table->date('dateDebut');
            $table->date('dateRetour')->nullable();
            $table->string('document')->nullable();
            $table->foreignIdFor(Agent::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobilite_agents');
    }
};
