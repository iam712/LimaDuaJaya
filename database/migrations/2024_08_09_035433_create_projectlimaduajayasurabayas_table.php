<?php

// database/migrations/2024_xx_xx_xxxxxx_create_projectlimaduajayasurabayas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projectlimaduajayasurabayas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projectlimaduajayasurabayas');
    }
};

