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
        Schema::create('on_site_assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('needed')->default(0);
            $table->string('text')->nullable();
            $table->datetime('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('on_site_assessments');
    }
};
