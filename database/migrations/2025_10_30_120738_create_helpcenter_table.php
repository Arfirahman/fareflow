<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('helpcenter', function (Blueprint $table) {
            $table->integer('questionid')->primary(); // Custom Primary Key
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->string('createdby', 100)->nullable();
            $table->date('dateadded')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('helpcenter');
    }
};