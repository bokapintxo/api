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
        Schema::dropIfExists('dialogs');
        Schema::create('dialogos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("personaje");
            $table->string("mensaje");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dialogos_ezin_det_irakurri', function (Blueprint $table) {
            //
        });
    }
};
