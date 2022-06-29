<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Line;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();
        Line::truncate();

        Company::factory()->count(4)
            ->create()
            ->each(function ($company)
        {
            Line::factory()->count(3)->create(['company_id' => $company->id]);
        });
    }
}
