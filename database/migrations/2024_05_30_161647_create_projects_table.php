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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('duration');
            $table->date('deadline');
            $table->string('freelancer_type');
            $table->string('freelancer_level');
            $table->string('tags')->nullable();
            $table->string('skills')->nullable();
            $table->string('budget_type');
            $table->integer('budget_from')->nullable();
            $table->integer('budget_to')->nullable();
            $table->integer('fixed_price')->nullable();
            $table->string('attachment')->nullable();
            $table->string('languages')->nullable();
            $table->string('language_fluency');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
