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
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('quiz_id')->nullable(false);
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
            $table->uuid('question_id')->nullable(false);
            $table->foreign('question_id')->references('id')->on('quiz_questions')->onDelete('cascade');
            $table->uuid('guest_id')->nullable(false);
            $table->foreign('guest_id')->references('id')->on('guests')->onDelete('cascade');
            $table->string('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_answers');
    }
};
