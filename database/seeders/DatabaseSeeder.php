<?php

namespace Database\Seeders;

use App\Models\post;
use App\Models\User;
use App\Models\media;
use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        
        category::create(['category'=>'solar installer']);
        category::create(['category'=>'solar technician']);
        category::create(['category'=>'customer']);

        
        User::factory(3)->create(['category_id'=>'1']);
        User::factory(3)->create(['category_id'=>'2']);
        User::factory(3)->create(['category_id'=>'3']);

     
        post::factory(3)->create(['user_id'=>'1']);
        post::factory(3)->create(['user_id'=>'4']);
        post::factory(3)->create(['user_id'=>'8']);

        DB::table('media')->truncate();
        media::factory()->create(['post_id'=>'1']);
        media::factory()->create(['post_id'=>'2']);
        media::factory()->create(['post_id'=>'3']);


    }
}
