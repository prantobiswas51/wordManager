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
        Schema::create('partcs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('story_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('part_c_qs');
            $table->string('part_c_ans');
            $table->string('part_c_note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partcs');
    }
};
