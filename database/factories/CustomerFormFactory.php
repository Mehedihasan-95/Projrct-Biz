<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\CustomerForm;
use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerForm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customerId' => function () {
                return Customer::all()->random();
            },
            'trackingCode' => $this->faker->randomDigit,
            'city' => $this->faker->city,
            'serviceName' => 'service df',
            'formStatus' => $this->faker->numberBetween(0, 5),
            'data' => $this->faker->text(50),
        ];
    }
}
