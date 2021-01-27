<?php

namespace Database\Factories;

use App\Models\JobAppliation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobAppliationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobAppliation::class;

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
            'title' => $this->faker->title($this->faker->randomElement($genders)),
            'email' => $this->faker->unique()->safeEmail,
            'gender' => $this->faker->randomElement($genders),
            'dob' => $this->faker->dateTimeBetween('-40 years', '-20 years'),
            'phone' => $this->faker->phoneNumber,
            'marital_status' => $this->faker->randomElement($marital_status),
            'address' => $this->faker->streetAddress,
            'address2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'specialization' => Str::title($this->faker->words(2, true)),
            'preferred_role' => $this->faker->jobTitle,
            'summary' => $this->faker->paragraphs(5, true),
            'total_years_of_xp' => $this->faker->numberBetween(1, 9),
            'recent_job_title' => $this->faker->jobTitle,
            'year_of_degree_certificate' => $this->faker->dateTimeBetween('-8 years', '-4 years'),
        ];
    }
}
