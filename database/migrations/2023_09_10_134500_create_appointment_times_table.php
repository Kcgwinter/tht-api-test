<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('Anytime')->default(0);
            $table->boolean('Morning')->default(0);
            $table->boolean('Afternoon')->default(0);
            $table->boolean('Evening')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_times');
    }
};
