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
        Schema::create('cessation_carrieres', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('motif', ['Deces', 'Revocation','Mise à la retraite','Démission','Autre']);
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
        Schema::dropIfExists('cessation_carrieres');
    }
};
