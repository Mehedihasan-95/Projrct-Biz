<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\PackageDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PackageDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'packageID' => function () {
                return Package::all()->random();
            },
            'parentID' => $this->faker->randomDigit,
            'info' => $this->faker->text(50),
        ];
    }
}
