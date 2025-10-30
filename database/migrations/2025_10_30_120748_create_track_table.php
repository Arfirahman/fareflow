<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('track', function (Blueprint $table) {
            $table->integer('trackid')->primary(); // Dianggap sebagai custom primary key
            $table->string('busnumber', 20)->nullable();
            $table->string('startingpoint', 100)->nullable();
            $table->string('destination', 100)->nullable();
            $table->text('gpspoint')->nullable();
            $table->integer('fareamount')->nullable();
            $table->time('starttimestamp')->nullable();
            $table->time('endtimestamp')->nullable();
            $table->string('routename', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('track');
    }
};