<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('ne_NP');
        for($i=0;$i<10;$i++)
        {
            $data=[
                'title'=> $faker->realText(20,2),
                'content'=> $faker->realText(500,2),
                'tags'=>$faker->word
            ];
            Post::create($data);
        }
    }
}
