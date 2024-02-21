<?php

use App\Contract\Enums\TypeMovementEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('type_movements', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['input', 'output', 'other'])
                ->default(TypeMovementEnum::OTHER->value);
            $table->string('designation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_movements');
    }
};
