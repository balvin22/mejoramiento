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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string("codigo")->unique();
            $table->string("nombre");
            $table->integer("numeroPlazas");
            $table->date("fecha");
            $table->string("otrosDatos");
            $table->unsignedBigInteger("viajero_id")->nullable();
            $table->foreign("viajero_id")->references("id")->on("viajeros")->onDelete("cascade");
            $table->unsignedBigInteger("destino_id")->nullable();
            $table->foreign("destino_id")->references("id")->on("destinos")->onDelete("cascade");
            $table->unsignedBigInteger("origen_id")->nullable();
            $table->foreign("origen_id")->references("id")->on("origens")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
