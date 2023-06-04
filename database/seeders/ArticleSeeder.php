<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run() //void
    {
        //

        for($i=0 ; $i<4 ; $i++){
    
            $title=fake()->sentence(6);
            DB::table('articles')->insert([
                'category_id'=>rand(1,7),
                'title'=>$title,
                'image'=>fake()->imageUrl(800, 400, 'cats', true, 'Blog'),
                'content'=>fake()->paragraph(6),
                'slug'=>Str::slug($title),
                'created_at'=>fake()->dateTime('now'),
                'updated_at'=>now()
            ]);

        }
    }
}
