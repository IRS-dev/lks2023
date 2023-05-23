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
        Schema::create('question_values', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('value');
            $table->uuid('question_id')->nullable(false);
            $table->foreign('question_id')->references('id')->on('quiz_questions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_values');
    }
};
