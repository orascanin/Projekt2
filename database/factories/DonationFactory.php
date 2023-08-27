<?php

namespace Database\Factories;
use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Donation::class;
    public function definition(): array
    {
        return [
            'amount'=> $this->faker->unique()->numberBetween(1,10000),
            'donation_date'=>$this->faker->date('Y-m-d'),
            'donor_id'=> $this->faker->numberBetween(1,15),
            'campaign_id'=> $this->faker->numberBetween(1,3),
        ];
    }
}
