<?php

use Illuminate\Database\Seeder;
use App\Logo;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Logo::create([

            'img' => "storage/img/big-logo.png",

            ]);
    }
}
