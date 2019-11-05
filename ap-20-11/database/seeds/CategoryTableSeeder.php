<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fake=Faker\Factory::create();
        for($i=0;$i<5;$i++)
        {
         DB::table('categories')->insert([
            'name' => $fake->sentence($nbWords = 3, $variableNbWords = true) ,
            'description' => $fake->text($maxNbChars = 40),
           
         ]);
        }
   

    }
}
