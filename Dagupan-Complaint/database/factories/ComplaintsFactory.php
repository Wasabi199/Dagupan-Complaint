<?php

namespace Database\Factories;

use App\Services\Barangays;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaints>
 */
class ComplaintsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            //
            'name'=>$this->faker->name(),
            'location'=>$this->faker->randomElement(Barangays::$barangay),
            'value'=>$this->faker->paragraphs($nb = 3, $asText = true)
        ];
    }
}
