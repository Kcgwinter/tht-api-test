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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type")->nullable();
            $table->string("location")->nullable();
            $table->foreignId('inventory_category_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('inventory_location_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('receipt_id')->nullable();
            $table->integer("quantity")->default(0);
            $table->double("price_per_unit")->default(0.00);
            $table->double("price")->default(0.00);
            $table->date("buy_date")->nullable();
            $table->string("url")->nullable();
            $table->string("SerialNumber")->nullable();
            $table->integer("stock")->nullable();
            $table->date("last_check_date")->nullable();
            $table->date("warranty_end")->nullable();
            $table->string("customField1")->nullable();
            $table->string("customField1name")->nullable();
            $table->string("customField2")->nullable();
            $table->string("customField2Name")->nullable();
            $table->string("customField3")->nullable();
            $table->string("customField3Name")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
