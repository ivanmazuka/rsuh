<?php

use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder
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
            DB::table('announcements')->insert([
                'title' => $faker->realText(64),
                'body' => $faker->realText(1024),
                'date' => $faker->dateTimeInInterval('now', '+ 365 days')
            ]);
        }
    }
}
