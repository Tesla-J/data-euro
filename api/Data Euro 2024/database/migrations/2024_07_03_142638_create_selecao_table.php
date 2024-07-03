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
        Schema::table('Selecao', function (Blueprint $table) {
            $table->id();
            $table->string("nome")->unique();
            $table->integer("pais");
            $table->integer("grupo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Selecao', function (Blueprint $table) {
            //
        });
    }
};
