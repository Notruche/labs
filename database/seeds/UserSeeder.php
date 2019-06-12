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
            'portrait'=>'storage/img/team/1.jpg',
            'role_id' => 1,

            ]);

            User::create([

                'name' => 'Editor 1',
                'email' => 'editor1@molengeek.com',
                'password' => bcrypt('azertyuiop'),
                'image'=>'storage/img/avatar/02.jpg',
                'portrait'=>'storage/img/team/2.jpg',
                'role_id' => 2,
    
                ]);

                User::create([

                    'name' => 'Editor 2',
                    'email' => 'editor2@molengeek.com',
                    'password' => bcrypt('azertyuiop'),
                    'image'=>'storage/img/avatar/03.jpg',
                    'portrait'=>'storage/img/team/3.jpg',
                    'role_id' => 2,
        
                    ]);
    }
}
