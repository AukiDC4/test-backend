<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'auki',
            'price' => 0.25,
            'photo' => 'foto',
            'observation' => 'obs',
            'size' => 's',
        ];
    }
}
