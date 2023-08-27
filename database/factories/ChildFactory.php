<?php

namespace Database\Factories;
use App\Models\Child;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Child::class;
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'lastname'=>$this->faker->lastname(),
            'birth_date'=>$this->faker->date('Y-m-d', '-18 years'),
            'gender'=> $this->faker->randomElement(['M', 'Ž']),
            'guardian'=>$this->faker->name(),
        ];
    }
}
