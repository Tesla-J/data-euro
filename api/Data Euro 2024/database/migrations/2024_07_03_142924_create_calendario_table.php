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
        Schema::table('Calendario', function (Blueprint $table) {
            $table->id();
            $table->integer("selecao1");
            $table->integer("selecao2");
            $table->integer("jogo");
            $table->date("data_jogo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Calendario', function (Blueprint $table) {
            //
        });
    }
};
