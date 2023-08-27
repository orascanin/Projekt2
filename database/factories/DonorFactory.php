<?php

namespace Database\Factories;
use App\Models\Donor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donor>
 */
class DonorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Donor::class;

    public function definition(): array
    {
        return [

            'name'=>$this->faker->name(),
            'lastname'=>$this->faker->lastname(),
            'email'=>$this->faker->unique()->safeEmail(),
            'password'=>'password',
            'date_of_birth'=> $this->faker->date('Y-m-d', '-18 years'),
            'address'=>$this->faker->randomElement(['Nurije Pozderca 15','Bedem BB','Dubrovačka bb','Radićeva 3']),
            'city'=>$this->faker->randomElement(['Cazin','Sarajevo','Mostar','Tuzla']),
            'phone'=> $this->faker->phoneNumber(),

        ];
    }
}
