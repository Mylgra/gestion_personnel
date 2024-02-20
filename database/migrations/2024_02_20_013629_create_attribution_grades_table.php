<?php

declare(strict_types=1);

use App\Models\Agent;
use App\Models\Grade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attribution_grades', function (Blueprint $table): void {
            $table->id();
            $table->date('date');
            $table->enum('motif', ['Grade initial', 'Evolution en grade']);
            $table->string('document')->nullable();
            $table->foreignIdFor(Agent::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Grade::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribution_grades');
    }
};
