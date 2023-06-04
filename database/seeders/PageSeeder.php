<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pages=['Hakkımızda','Vizyonumuz','Misyonumuz'];
        $count=0;
        foreach($pages as $page)
        {
            $count++;
         DB::table('pages')->insert([
             'title'=>$page,
             'slug'=>Str::slug($page),
             'image'=>'https://cloudinary.hbs.edu/hbsit/image/upload/s--EmT0lNtW--/f_auto,c_fill,h_375,w_750,/v20200101/6978C1C20B650473DD135E5352D37D55.jpg',
             'content'=>'Lorem ipsum dolor sit amet, consectetur 
              adipiscing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad minim veniam, quis
              nostrud exercitation ullamco laboris nisi ut aliquip ex 
              ea commodo consequat. Duis aute irure dolor in reprehenderit 
              in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
              officia deserunt mollit anim id est laborum.',
              'order'=>$count,
             'created_at'=>now(),
             'updated_at'=>now()
         ]);
        }

    }
}
