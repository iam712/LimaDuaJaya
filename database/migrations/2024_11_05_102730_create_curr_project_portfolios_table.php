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
        Schema::create('curr_project_portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('currproject_id')->constrained('curr_projects')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('status_detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curr_project_portfolios');
    }
};
