<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 3) as $value) {
            DB::table('users')->insert([
               'name' => $faker->name,
               'email' => $faker->email,
               'role'  => $faker->randomElement(['admin', 'user']),
               'password' => Hash::make('12345678'),
            ]);
        }
    }
}
