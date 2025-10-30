<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('passenger', function (Blueprint $table) {
            // userid integer NOT NULL (Dibuat otomatis sebagai Primary Key Auto-Increment)
            $table->id('userid'); 
            $table->string('fullname', 100);
            $table->date('birthdate');
            $table->string('email', 100)->unique(); // Tambahkan unique untuk email
            $table->string('phone', 20)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('province', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('passenger');
    }
};