<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wallet', function (Blueprint $table) {
            $table->integer('walletid')->primary(); // Custom Primary Key
            $table->foreignId('userid')->constrained('passenger', 'userid')->cascadeOnDelete(); // Foreign Key
            $table->integer('balance');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wallet');
    }
};