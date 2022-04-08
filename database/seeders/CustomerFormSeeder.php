<?php

namespace Database\Seeders;

use App\Models\CustomerForm;
use Illuminate\Database\Seeder;

class CustomerFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerForm::factory()
            ->times(10)
            ->create();
    }
}
