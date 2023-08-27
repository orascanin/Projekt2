<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Donor;

class DonorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Donor::factory()->count(15)->create();
    }
}
