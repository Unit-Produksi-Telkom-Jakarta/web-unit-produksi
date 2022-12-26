<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_name' => fake()->name(),
            'client_email' => fake()->email(),
            'no_handphone' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'pic' => fake()->colorName(),
            'request' => fake()->sentence(3),
            'mulai' => fake()->date('m/d/Y'),
            'selesai' => fake()->date('m/d/Y'),
            'keterangan' => fake()->sentence((rand(3,10))),
            'status' => rand(0, 1) ? 'Selesai' : 'Cancel',
            'jumlah' => rand(70000, 100000000)
        ];
    }
}
