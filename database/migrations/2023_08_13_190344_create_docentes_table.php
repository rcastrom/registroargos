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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("appat");
            $table->string("apmat")->nullable();
            $table->unsignedBigInteger("tec");
            $table->string("correo")->unique();
            $table->string("monto");
            $table->char('pago',1)->charset('binary');
            $table->char('ponente',1)->charset('binary');
            $table->timestamps();
            $table->foreign("tec")
                ->references("id")->on("tecnologicos")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
