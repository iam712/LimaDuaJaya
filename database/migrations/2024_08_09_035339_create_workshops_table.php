<?php

// database/migrations/2024_xx_xx_xxxxxx_create_workshops_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('location');
            $table->text('description');
            $table->boolean('isLimaduajaya')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};

