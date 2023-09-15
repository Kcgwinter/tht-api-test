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
        Schema::create('inventory_locations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        DB::table('inventory_locations')->insert([
            'name' => "Office",
        ]);

        DB::table('inventory_locations')->insert([
            'name' => "Workshop",
        ]);

        DB::table('inventory_locations')->insert([
            'name' => "Storage",
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_locations');
    }
};
