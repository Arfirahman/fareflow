<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('card', function (Blueprint $table) {
            $table->integer('cardid')->primary(); // Custom Primary Key
            $table->string('name', 100)->nullable();
            $table->string('cardnumber', 50)->nullable();
            $table->integer('cvv')->nullable();
            $table->date('expireddate')->nullable();
            $table->foreignId('userid')->constrained('passenger', 'userid')->cascadeOnDelete(); // Foreign Key
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('card');
    }
};