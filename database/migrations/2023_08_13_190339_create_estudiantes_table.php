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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("appat");
            $table->string("apmat")->nullable();
            $table->string("control")->unique();
            $table->unsignedBigInteger("tec");
            $table->string("correo");
            $table->string("monto");
            $table->char('pago',1)->charset('binary');
            $table->unsignedBigInteger("taller");
            $table->unsignedBigInteger("visita");
            $table->timestamps();
            $table->foreign("tec")
                ->references("id")->on("tecnologicos")->onDelete("cascade");
            $table->foreign("taller")
                ->references("id")->on("talleres")->onDelete("cascade");
            $table->foreign("visita")
                ->references("id")->on("visitas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
