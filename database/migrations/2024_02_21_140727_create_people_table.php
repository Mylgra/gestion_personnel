<?php

use App\Contract\Enums\PersonCivilStatusEnum;
use App\Contract\Enums\PersonGenderEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('contact')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('picture')->nullable();
            $table->string('identity')->nullable();
            $table->string('birthplace')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('gender', ['Masculin', 'Feminin', 'Non reconnu'])
                ->default(PersonGenderEnum::NonReconnu->value);
            $table->enum('civil_status', ['Celibataire', 'Marié(e)', 'Non reconnu'])
                ->default(PersonCivilStatusEnum::NonReconnu->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
