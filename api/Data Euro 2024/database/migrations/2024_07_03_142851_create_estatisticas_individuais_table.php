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
        Schema::table('EstatisticasIndividuais', function (Blueprint $table) {
            $table->id();
            $table->integer("jogador");
            $table->integer("passes");
            $table->integer("assistencias")->default(0);
            $table->integer("remates")->default(0);
            $table->integer("minutos")->default(0); // essa mudança vai dar merda?
            $table->integer("jogo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('EstatisticasIndividuais', function (Blueprint $table) {
            //
        });
    }
};
