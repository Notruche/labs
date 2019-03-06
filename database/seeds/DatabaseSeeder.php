<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContentSeeder::class);
        $this->call(CarouselSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PivotSeeder::class);
    }
}
