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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string("number")->default('00000');
            $table->integer('opportunity')->default(5);
            $table->string('message')->nullable();
            $table->double('subtotal')->default(00.00);
            $table->double('discount')->default(00.00);
            $table->double('tax')->default(00.00);
            $table->double('total')->default(00.00);
            $table->boolean('requiredDeposit')->default(0);
            $table->double('deposit')->default(00.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
