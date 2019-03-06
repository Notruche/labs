<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([

            'title' => 'Get in the lab',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon' => 'flaticon-023-flask',
            ]);

            Service::create([

                'title' => 'Projects online',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'icon' => 'flaticon-011-compass',
                ]);

                Service::create([

                    'title' => 'SMART MARKETING',
                    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                    'icon' => 'flaticon-037-idea',
                    ]);

                    Service::create([

                        'title' => 'Social Media',
                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                        'icon' => 'flaticon-039-vector',
                        ]);

                        Service::create([

                            'title' => 'Brainstorming',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                            'icon' => 'flaticon-036-brainstorming',
                            ]);

                            Service::create([

                                'title' => 'Documented',
                                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                                'icon' => 'flaticon-026-search',
                                ]);

                                Service::create([

                                    'title' => 'Responsive',
                                    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                                    'icon' => 'flaticon-018-laptop-1',
                                    ]);

                                    Service::create([

                                        'title' => 'Retina ready',
                                        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                                        'icon' => 'flaticon-043-sketch',
                                        ]);

                                        Service::create([

                                            'title' => 'Ultra modern',
                                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                                            'icon' => 'flaticon-012-cube',
                                            ]);
    }
}
