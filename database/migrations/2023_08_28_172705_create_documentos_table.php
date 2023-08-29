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
        Schema::create('documento', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200)->unique();
            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento');
            $table->unsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setor');
            $table->unsignedBigInteger('filial_id');
            $table->foreign('filial_id')->references('id')->on('filial');
            $table->string('armario', 200);
            $table->string('gaveta', 200);
            $table->string('pasta', 200);
            $table->date('data_documento');
            $table->date('data_inclusao');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento');
    }
};
