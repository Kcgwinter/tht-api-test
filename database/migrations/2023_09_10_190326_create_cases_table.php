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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('customer_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('address_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->foreignId('request_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('quote_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('job_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('invoice_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
