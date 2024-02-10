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
        Schema::dropIfExists('dialogoak');
        Schema::dropIfExists('dialogs');
        Schema::create('dialogs', function (Blueprint $table) {
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
        Schema::table('dialogs', function (Blueprint $table) {
            //
        });
    }
};
