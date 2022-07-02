<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fname' => 'Hilal',
            'lname' => 'Ahmad',
            'username' => 'hilal123',
            'description' => 'i am a full stack developer',
            'image' => 'null',
            'email' => 'hilal@gmail.com',
            'password' => Hash::make('hilal123'),
        ];
    }
}
