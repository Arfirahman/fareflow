<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('history', function (Blueprint $table) {
            $table->integer('historyid')->primary(); // Custom Primary Key
            
            // Foreign Keys
            $table->integer('trackid');
            $table->foreign('trackid')->references('trackid')->on('track')->cascadeOnDelete();
            $table->foreignId('userid')->constrained('passenger', 'userid')->cascadeOnDelete();

            // Kolom Data
            $table->string('route', 100)->nullable();
            $table->time('departingtime')->nullable();
            $table->time('arrivingtime')->nullable();
            $table->date('date')->nullable();
            $table->double('fare'); // double precision di PostgreSQL jadi double di MySQL
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};