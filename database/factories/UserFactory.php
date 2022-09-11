<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'category_id' =>$this->faker->randomDigit(),

            'email' => $this->faker->unique()->safeEmail(),
            'mobileno'=>$this->faker->numerify('##########'),
            'firmname'=>$this->faker->company(),
            'gstno'=>$this->faker->numerify('GSTIO##########'),
            'address'=>$this->faker->address(),
            'location'=>$this->faker->city(),
            'wiringcharge'=>$this->faker->numerify('##,###'),
            'structurecharge'=>$this->faker->numerify('##,###'),
            'totalcharge'=>$this->faker->numerify('##,###'),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
