<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = 10;
        
        for($i = 0; $i < $users; $i++) {
            $newUser = new User();

            $newUser->name = $faker->name;
            $newUser->email = $faker->email;
            $newUser->password = Hash::make($faker->text(8));
            
            $newUser->save();
        }
    }
}
