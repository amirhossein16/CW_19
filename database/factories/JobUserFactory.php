<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class JobUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jobs = Job::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($users),
            'job_id' => $this->faker->randomElement($jobs),
        ];
    }
}
