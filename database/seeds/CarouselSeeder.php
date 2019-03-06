<?php

use Illuminate\Database\Seeder;
use App\MainImage;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainImage::create([

            'image' => "storage/img/01.jpg",

            ]);
        MainImage::create([

            'image' => "storage/img/02.jpg",

            ]);
    }
}
