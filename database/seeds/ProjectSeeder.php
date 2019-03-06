<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([

            'title' => 'Get in the lab',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon' => 'flaticon-002-caliper',
            'image' => 'storage/img/card-1.jpg'
            ]);

            Project::create([

                'title' => 'Projects online',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
                'icon' => 'flaticon-019-coffee-cup',
                'image' => 'storage/img/card-2.jpg'
                ]);

                Project::create([

                    'title' => 'SMART MARKETING',
                    'desc' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
                    'icon' => 'flaticon-020-creativity',
                    'image' => 'storage/img/card-3.jpg'
                    ]);

                    Project::create([

                        'title' => 'Get in the lab',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
                        'icon' => 'flaticon-037-idea',
                        'image' => 'storage/img/card-1.jpg'
                        ]);

                        Project::create([

                            'title' => 'Projects online',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
                            'icon' => 'flaticon-025-imagination',
                            'image' => 'storage/img/card-2.jpg'
                            ]);

                            Project::create([

                                'title' => 'SMART MARKETING',
                                'desc' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
                                'icon' => 'flaticon-008-team',
                                'image' => 'storage/img/card-3.jpg'
                                ]);
    }
}
