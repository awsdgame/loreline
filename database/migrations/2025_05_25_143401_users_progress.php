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
        Schema::create('users_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->onDelete("cascade");
            $table->foreignId('story_id')->constrained('stories','id')->onDelete("cascade");
            $table->foreignId('node_id')->constrained('nodes','id')->onDelete('cascade');
            $table->foreignId('choices_id')->nullable()->constrained('choices','id')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_progress');
    }
};
