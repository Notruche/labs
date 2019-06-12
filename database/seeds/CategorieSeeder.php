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
            'validation' => 'valide',

            ]);

            Categorie::create([

                'name' => "Nisi eu lobortis pharetra",
                'validation' => 'valide',
    
                ]);

                Categorie::create([

                    'name' => "Orci quam accumsan",
                    'validation' => 'valide',
        
                    ]);

                    Categorie::create([

                        'name' => "Auguen pharetra massa",
                        'validation' => 'valide',
            
                        ]);

            Categorie::create([

                'name' => "Tellus ut nulla",
                'validation' => 'valide',
    
                ]);

                Categorie::create([

                    'name' => "Etiam egestas viverra",
                    'validation' => 'valide',
        
                    ]);

    }
}
