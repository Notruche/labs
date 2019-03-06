<?php

use Illuminate\Database\Seeder;
use App\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([

            'name' => 'Michael Smith',
            'rank' => 'CEO Company',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'image' => "storage/img/avatar/02.jpg",

            ]);

            Testimonial::create([

                'name' => 'Michael Smith',
                'rank' => 'CEO Company',
                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                'image' => "storage/img/avatar/01.jpg",
    
                ]);

                Testimonial::create([

                    'name' => 'Michael Smith',
                    'rank' => 'CEO Company',
                    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                    'image' => "storage/img/avatar/03.jpg",
        
                    ]);

                    Testimonial::create([

                        'name' => 'Michael Smith',
                        'rank' => 'CEO Company',
                        'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                        'image' => "storage/img/avatar/01.jpg",
            
                        ]);

                        Testimonial::create([

                            'name' => 'Michael Smith',
                            'rank' => 'CEO Company',
                            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                            'image' => "storage/img/avatar/02.jpg",
                
                            ]);

                            Testimonial::create([

                                'name' => 'Michael Smith',
                                'rank' => 'CEO Company',
                                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                                'image' => "storage/img/avatar/03.jpg",
                    
                                ]);

                                Testimonial::create([

                                    'name' => 'Michael Smith',
                                    'rank' => 'CEO Company',
                                    'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                                    'image' => "storage/img/avatar/02.jpg",
                        
                                    ]);

                                    Testimonial::create([

                                        'name' => 'Michael Smith',
                                        'rank' => 'CEO Company',
                                        'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
                                        'image' => "storage/img/avatar/02.jpg",
                            
                                        ]);
    }
}
