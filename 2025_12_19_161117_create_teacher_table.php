<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('tid'); // primary key tid
            $table->string('full_name', 255);
            $table->enum('gender', ['Male', 'Female']);
            $table->string('degree', 100);
            $table->string('tel', 20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
