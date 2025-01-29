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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', "id")->cascadeOnDelete();
            $table->string('title');
            $table->integer('prep_time');
            $table->integer('cook_time');
            $table->integer('servings');
            $table->text('description');
            $table->longText('instructions');
            $table->string('image_url');
            $table->enum('difficulty', ['easy', 'medium', 'advanced']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
