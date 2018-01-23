<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->realText(127),
                'body' => $faker->realText(1024),
                'picture' => '1.png'
            ]);
        }

    }
}
