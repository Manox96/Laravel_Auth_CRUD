<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // is like u use each one here :
        /*
            User::factory()->create([
                'name' => 'aymane lm3zaaa',
                'email' => 'lmaa3za@goat.com',
                'is_admin' => true
            ]);
            and
            Category::factory()->create();
            he call other file

        */
        // $this->call([
        //     AdminSeeder::class,
        //     CategorieSeeder::class,
        //     PostSeeder::class,
        // ]);
    }
}
