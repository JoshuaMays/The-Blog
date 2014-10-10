<?php

Class PostsTableSeeder extends Seeder {
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('posts')->truncate();
        
        // GENERATE RANDOM NUMBER OF SENTENCES IN FAKER->PARAGRAPH
        $rand = mt_rand(4,20);
        
        foreach(range(1, 30) as $index) {
            Post::create([
                'title' => $faker->catchPhrase,
                'content' => $faker->paragraph($rand)
            ]);
        }
    }
}