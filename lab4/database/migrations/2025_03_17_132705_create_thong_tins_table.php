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
        Schema::create('thong_tins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); 
            $table->string('description');
            $table->string('detail');
            $table->integer('viewers')->default(0);
            $table->unsignedBigInteger('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thong_tins');
    }
};
