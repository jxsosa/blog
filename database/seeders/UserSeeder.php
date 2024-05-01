<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*User::created([
            'name' => 'jhonathan Sosa',
            'email' => 'sjhonathan@gmail.com',
            'password' => bcrypt('12345678')
        ]);*/
        User::factory(50)->create();
    }
}
