<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('topup', function (Blueprint $table) {
            $table->integer('topupid')->primary(); // Custom Primary Key
            
            // Foreign Keys
            $table->foreignId('userid')->constrained('passenger', 'userid')->cascadeOnDelete();
            $table->integer('walletid');
            $table->foreign('walletid')->references('walletid')->on('wallet')->cascadeOnDelete();
            $table->integer('cardid')->nullable();
            $table->foreign('cardid')->references('cardid')->on('card')->nullable()->cascadeOnDelete();

            // Kolom Data
            $table->integer('amount');
            $table->string('method', 50)->nullable();
            $table->boolean('status')->nullable();
            $table->date('topupdate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('topup');
    }
};