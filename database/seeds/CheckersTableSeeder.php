<?php

use Illuminate\Database\Seeder;

class CheckersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      // seed 100 times with faker data
      for ($i = 0; $i < 100; $i++) {
        DB::table('checkers')->insert([
          'checkers'    => $faker->numberBetween($min = 50, $max = 150),
          'created_at'  => $faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Stockholm'),
          'updated_at'  => $faker->dateTimeThisYear($max = 'now', $timezone = 'Europe/Stockholm')
        ]);
      }

    }
}
