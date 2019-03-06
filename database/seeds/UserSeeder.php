<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Admin',
            'email' => 'admin@molengeek.com',
            'password' => bcrypt('azertyuiop'),
            'image'=>'storage/img/avatar/01.jpg',
            'role_id' => 1,

            ]);

            User::create([

                'name' => 'Editor 1',
                'email' => 'editor1@molengeek.com',
                'password' => bcrypt('azertyuiop'),
                'image'=>'storage/img/avatar/02.jpg',
                'role_id' => 2,
    
                ]);

                User::create([

                    'name' => 'Editor 2',
                    'email' => 'editor2@molengeek.com',
                    'password' => bcrypt('azertyuiop'),
                    'image'=>'storage/img/avatar/03.jpg',
                    'role_id' => 2,
        
                    ]);
    }
}
