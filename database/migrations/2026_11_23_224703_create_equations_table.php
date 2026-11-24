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
            $table->integer('ValueA');
            $table->integer('ValueB');
            $table->integer('ValueC');
            $table->integer('discriminant');
            $table->string('answer');
            $table->timestamps();
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
