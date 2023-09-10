<?php

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Request::factory()->count(10)->hasAppointmentDays(1)->hasAppointmentTimes(1)->hasOnSiteAssessments(1)->create();
    }
}
