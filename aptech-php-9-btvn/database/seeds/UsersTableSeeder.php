<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake=Faker\Factory::create();
        for($i=0;$i<10;$i++)
        {
         DB::table('users')->insert([
            'name' => $fake->word ,
            'email' => $fake->email ,
            'password' => $fake->sentence($nbWords = 2, $variableNbWords = true)
         ]);
        }


    }
}
