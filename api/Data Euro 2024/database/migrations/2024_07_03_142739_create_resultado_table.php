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
        Schema::table('Resultado', function (Blueprint $table) {
            $table->id();
            $table->integer("golos_equipa1");
            $table->integer("golos_equipa2");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Resultado', function (Blueprint $table) {
            //
        });
    }
};
