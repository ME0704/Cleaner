<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proposal;
use App\Models\Gig;
use App\Models\Review;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Company;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Company::factory()->count(10)->create();
        Service::factory()->count(10)->create();
        Gig::factory()->count(10)->create();
        Image::factory()->count(10)->create();
        Review::factory()->count(10)->create();
        Proposal::factory()->count(10)->create();
        Schedule::factory()->count(10)->create();
    }
}
