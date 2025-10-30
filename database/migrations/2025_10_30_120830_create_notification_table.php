<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->integer('notificationid')->primary(); // Custom Primary Key
            $table->foreignId('userid')->constrained('passenger', 'userid')->cascadeOnDelete(); // Foreign Key
            $table->string('category', 50)->nullable();
            $table->text('message')->nullable();
            $table->date('dateadded')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notification');
    }
};