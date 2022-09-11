<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            
            'user_id'=>"1",
            'sitename'=>$this->faker->name()." 50 kw",
            'sitedetail'=>$this->faker->paragraph(),
            'location'=>$this->faker->city(),
            'address'=>$this->faker->address()

        ];
    }
}
