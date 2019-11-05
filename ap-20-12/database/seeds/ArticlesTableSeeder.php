<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
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
        for($i=0;$i<10;$i++){
        DB::table('articles')->insert([
            'title'=>$fake->sentence($nbWords = 2, $variableNbWords = true),
            'description'=>$fake->sentence($nbWords = 6, $variableNbWords = true),
            'content'=>$fake->sentence($nbWords = 6, $variableNbWords = true) 
        ]);
        }
    }
}
