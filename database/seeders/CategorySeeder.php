<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=['Eğlence','Bilişim','Teknoloji','Gezi','sağlık','Spor'];
       for($i=0;$i<5;$i++){
        DB::table('categories')->insert([
            'name'=>$categories[$i],
            'slug'=>Str::slug($categories[$i]),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
       }

    }
}
