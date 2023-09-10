<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('Monday')->default(0);
            $table->boolean('Tuesday')->default(0);
            $table->boolean('Wednesday')->default(0);
            $table->boolean('Thursday')->default(0);
            $table->boolean('Friday')->default(0);
            $table->boolean('Saturday')->default(0);
            $table->boolean('Sunday')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_days');
    }
};
