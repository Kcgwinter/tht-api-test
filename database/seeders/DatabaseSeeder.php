<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([CustomerSeeder::class]);
        $this->call([AddressSeeder::class]);
        $this->call([CompanySeeder::class]);
        $this->call([RequestSeeder::class]);
        $this->call([QuotesSeeder::class]);
        $this->call([JobsSeeder::class]);
        $this->call([CasesSeeder::class]);
    }
}
