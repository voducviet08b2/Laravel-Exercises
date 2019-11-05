<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostsTableSeeder extends Seeder
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
         DB::table('posts')->insert([
            'title' => $fake->sentence($nbWords = 6, $variableNbWords = true) ,
            'description' => $fake->text($maxNbChars = 200) 
         ]);
        }
    }
}
