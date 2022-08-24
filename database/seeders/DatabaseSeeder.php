<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarCategory;
use App\Models\Category;
use App\Models\Game;
use App\Models\GameCategory;
use App\Models\Post;
use App\Models\Tag;
use App\Models\TagCar;
use App\Models\TagGame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        CarCategory::factory(20)->create();
        $tags = TagCar::factory(50)->create();
        $cars = Car::factory(100)->create();

        foreach ($cars as $car){
            $tagsId = $tags->random(5)->pluck('id');
            $car->tags()->attach($tagsId);
        }
    }
}
