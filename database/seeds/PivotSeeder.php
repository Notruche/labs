<?php

use Illuminate\Database\Seeder;
use App\Pivot;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pivot::create([
            'tag_id' => 2,
            'article_id' => 2,
        ]);

        Pivot::create([
            'tag_id' => 3,
            'article_id' => 2
        ]);
        Pivot::create([
            'tag_id' => 2,
            'article_id' => 1,
        ]);

        Pivot::create([
            'tag_id' => 3,
            'article_id' => 1
        ]);
        Pivot::create([
            'tag_id' => 2,
            'article_id' => 3,
        ]);

        Pivot::create([
            'tag_id' => 3,
            'article_id' => 3
        ]);
    }
}
