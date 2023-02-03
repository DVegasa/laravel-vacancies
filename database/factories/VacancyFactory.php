<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $from = $this->faker->numberBetween(30, 300);
        $to = $this->faker->numberBetween($from, $from + 75);

        if ($to % 4 === 0) $to = null;
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->text(),
            'salaryFrom' => $from * 1000,
            'salaryTo' => $to ? $to * 1000 : null,
        ];
    }
}
