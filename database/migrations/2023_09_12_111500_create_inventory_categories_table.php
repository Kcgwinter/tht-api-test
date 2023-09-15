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
        Schema::create('inventory_categories', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        DB::table('inventory_categories')->insert([
            'name' => "General",
        ]);

        DB::table('inventory_categories')->insert([
            'name' => "Office",
        ]);

        DB::table('inventory_categories')->insert([
            'name' => "Tools",
        ]);

        DB::table('inventory_categories')->insert([
            'name' => "Equipment",
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_categories');
    }
};
