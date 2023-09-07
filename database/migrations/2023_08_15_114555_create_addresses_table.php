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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->String("name");
            $table->String("street");
            $table->String("street2")->nullable();
            $table->String("city");
            $table->String("state");
            $table->String("postalcode");
            $table->String("country")->nullable();
            $table->boolean("active")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
