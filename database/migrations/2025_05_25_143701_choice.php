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
        Schema::create('choices', function (Blueprint $table) {
    $table->id();
    $table->foreignId('from_node_id')->constrained('nodes')->onDelete('cascade');
    $table->foreignId('to_node_id')->constrained('nodes')->onDelete('cascade');
    $table->string('label');
    $table->boolean('is_important')->default(false);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
