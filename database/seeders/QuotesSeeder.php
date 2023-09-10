<?php

namespace Database\Seeders;

use App\Models\quotes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        quotes::factory()->count(10)->create();
    }
}
