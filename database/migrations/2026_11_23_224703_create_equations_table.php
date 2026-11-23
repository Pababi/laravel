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
        Schema::create('equations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ValueA');
            $table->integer('ValueB');
            $table->integer('ValueC');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equations');
    }
};
