<?php

namespace Database\Factories;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Campaign::class;
    public function definition(): array
    {
        return [
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRppWpIHXC7sAS-lJeZThZv_jP2ZVgAPbTohBZkhWLE&s',
            'title'=> 'Obicni opis',
            'child_id'=> $this->faker->numberBetween(1,10),
            'start_date'=>$this->faker->date('Y-m-d'),
            'end_date'=>$this->faker->date('Y-m-d'),
            'goal_amount'=> $this->faker->unique()->numberBetween(1,10000),
            'description'=> 'Obicni opis',
        ];
    }
}
