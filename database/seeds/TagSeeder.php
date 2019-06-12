<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([

            'name' => "branding",
            'validation' => 'valide',

            ]);
            Tag::create([

                'name' => "identity",
                'validation' => 'valide',
    
                ]);
                Tag::create([

                    'name' => "video",
                    'validation' => 'valide',
        
                    ]);
                    Tag::create([

                        'name' => "design",
                        'validation' => 'valide',
            
                        ]);
                        Tag::create([

                            'name' => "inspiration",
                            'validation' => 'valide',
                
                            ]);
                            Tag::create([

                                'name' => "web design",
                                'validation' => 'valide',
                    
                                ]);
                                Tag::create([

                                    'name' => "photography",
                                    'validation' => 'valide',
                        
                                    ]);
    }
}
