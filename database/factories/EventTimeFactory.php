<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventTime>
 */
class EventTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'start_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'end_date'   => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'description' => $this->faker->sentence,
            'event_id'    => Event::factory(), // tạo event mới khi test
        ];
    }
}
