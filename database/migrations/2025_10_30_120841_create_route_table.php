<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('route', function (Blueprint $table) {
            $table->integer('routeid')->primary(); // Custom Primary Key
            $table->integer('busid');
            $table->foreign('busid')->references('busid')->on('bus')->cascadeOnDelete(); // Foreign Key
            $table->string('routename', 100)->nullable();
            $table->time('departuretime')->nullable();
            $table->integer('busnumber')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('route');
    }
};