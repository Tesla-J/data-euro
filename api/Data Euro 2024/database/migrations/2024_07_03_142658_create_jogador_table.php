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
        Schema::table('Jogador', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("nacionalidade"); // poderia ser um referencia ao país...
            $table->integer("camisola");
            $table->integer("selecao");
            $table->integer("golos")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Jogador', function (Blueprint $table) {
            //
        });
    }
};
