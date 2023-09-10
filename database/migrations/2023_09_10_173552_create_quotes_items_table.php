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
        Schema::create('quotes_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->default('Name');
            $table->string('description')->default('Description');
            $table->integer('quantity')->default(1);
            $table->double('unitPrice')->default(0.00);
            $table->double('total')->default(0.00);
            $table->boolean('optional')->default(0);
            $table->double('discount')->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes_items');
    }
};
