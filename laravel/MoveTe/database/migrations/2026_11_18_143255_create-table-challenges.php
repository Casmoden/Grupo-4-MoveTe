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
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->text('todo');
            $table->enum('category',['Corrida','Caminhada','Mobilidade'])->default('Caminhada');
            $table->enum('difficulty',['Fácil','Médio','Difícil'])->default('Fácil');
            $table->text('description')->nullable();
            $table->string('duration', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenges');
    }
};
