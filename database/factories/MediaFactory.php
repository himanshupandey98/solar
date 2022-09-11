<?php

namespace Database\Factories;

use App\Models\post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id'=>"1",
            'image'=>'https://source.unsplash.com/random/?city,night='.$this->faker->randomDigit()
           

        ];
    }
}
