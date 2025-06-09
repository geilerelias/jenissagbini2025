<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip_address')->index(); // IP del visitante
            $table->string('url'); // URL visitada
            $table->text('user_agent')->nullable(); // navegador/dispositivo
            $table->timestamp('visited_at')->index(); // fecha de visita
            $table->timestamp('left_at')->nullable(); // para calcular duración
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
