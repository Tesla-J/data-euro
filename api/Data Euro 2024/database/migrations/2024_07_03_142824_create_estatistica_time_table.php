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
        Schema::table('EstatisticaTime', function (Blueprint $table) {
            $table->id();
            $table->integer("remates")->default(0);
            $table->integer("livres")->default(0);
            $table->integer("foras_jogo")->default(0);
            $table->integer("jogo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('EstatisticaTime', function (Blueprint $table) {
            //
        });
    }
};
