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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('preference_id');
            $table->unsignedBigInteger('content_id');
            $table->string('name', 50);
            $table->timestamps();

            $table->foreign('content_id')->references('id')->on('contents')->restrictOnDelete()->restrictOnUpdate();
            $table->foreign('preference_id')->references('id')->on('preferences')->restrictOnDelete()->restrictOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
