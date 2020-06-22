<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\InfoUser;
use App\User;

class InfoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach ($users as $user) {
            $newInfoUser = new InfoUser();

            $newInfoUser->user_id = $user->id;
            $newInfoUser->phone_number = $faker->phoneNumber();
            $newInfoUser->address = $faker->streetAddress();
            $newInfoUser->image = $faker->imageUrl(320, 200);
            
            $newInfoUser->save();
        }
    }
}
