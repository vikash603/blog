<?php

use Illuminate\Database\Seeder;
use App\News;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($i=1; $i<=4; $i++){
        $news= new News;

        $news->category="4";
       $news->subcategory="9";
       $news->author=$faker->name;
        $news->newstype="6";
         $news->tags=$faker->text;
         $news->alt=$faker->text;
         $news->slug=$faker->text;
        $news->title=$faker->text;
      $news->youtube=$faker->text;
       $news->description=$faker->text;
       
       $news->image=$faker->imageUrl();
       $news->save();
   }
    }
}
