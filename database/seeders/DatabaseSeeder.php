<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Customer::factory(10)->create();
        \App\Models\Package::factory(10)->create();
        \App\Models\CustomerForm::factory(10)->create();
        \App\Models\PackageDetail::factory(10)->create();
    }
}
