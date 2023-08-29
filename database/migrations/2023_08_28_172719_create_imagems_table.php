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
        Schema::create('imagem', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('documento_id');
            $table->foreign('documento_id')->references('id')->on('documento');
            $table->string('endereco', 200);
            $table->string('tipo', 10);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagem');
    }
};
