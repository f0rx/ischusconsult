<?php

namespace Database\Factories;

use App\Models\JobApplication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobApplication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genders = ['male', 'female'];
        $marital_status = ['single', 'married', 'divorced'];

        return [
            'application_id' => Str::upper(Str::random(11)),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'marital_status' => $this->faker->randomElement($marital_status),
            'address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,

            'age' => $this->faker->randomNumber(2, true),
            'gender' => $this->faker->randomElement($genders),
            'dob' => $this->faker->dateTimeBetween('-40 years', '-20 years'),
            'preferred_role' => $this->faker->jobTitle,
            'recent_job_title' => $this->faker->jobTitle,
            'total_years_of_xp' => $this->faker->numberBetween(1, 9),
            'summary' => $this->faker->paragraphs(5, true),
        ];
    }
}
