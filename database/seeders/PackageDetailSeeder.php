<?php

namespace Database\Seeders;

use App\Models\PackageDetail;
use Illuminate\Database\Seeder;

class PackageDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PackageDetail::factory()
            ->times(10)
            ->create();
    }
}
