<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $roleIDsArray = [1, 3, 4];
        
        // dd(array_random($categoryIDsArray));
        $fake=Faker\Factory::create();
        for($i=0;$i<10;$i++)
        {
         DB::table('users')->insert([
            'username' => $fake->sentence($nbWords = 1, $variableNbWords = true) ,
            'email' => $fake->sentence($nbWords = 1, $variableNbWords = true) ,
            'password' => $fake->sentence($nbWords = 1, $variableNbWords = true) ,
            'role_id' =>4
         ]);
        }

    }
}
