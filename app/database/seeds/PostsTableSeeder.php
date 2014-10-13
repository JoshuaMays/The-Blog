<?php

Class PostsTableSeeder extends Seeder {
    public function run()
    {
        $faker = Faker\Factory::create();

        // GENERATE RANDOM NUMBER OF SENTENCES IN FAKER->PARAGRAPH
        $rand = mt_rand(4,20);

        $user = User::first();

        foreach(range(1, 30) as $index) {
            $updatedAt = $faker->dateTimeThisYear();
            $createdAt = $faker->dateTimeThisYear($updatedAt);
            Post::create([
                'title' => $faker->catchPhrase,
                'content' => $faker->paragraph($rand),
                'updated_at' => $updatedAt,
                'created_at' => $createdAt,
                'user_id' => $user->id
            ]);
        }
    }
}