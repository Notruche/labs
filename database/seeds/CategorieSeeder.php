<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([

            'name' => "Vestibulum maximus",

            ]);

            Categorie::create([

                'name' => "Nisi eu lobortis pharetra",
    
                ]);

                Categorie::create([

                    'name' => "Orci quam accumsan",
        
                    ]);

                    Categorie::create([

                        'name' => "Auguen pharetra massa",
            
                        ]);

            Categorie::create([

                'name' => "Tellus ut nulla",
    
                ]);

                Categorie::create([

                    'name' => "Etiam egestas viverra",
        
                    ]);

    }
}
