<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Post::create([
				'title'   => $faker->sentence($nbWords = 6),
				'body'    => $faker->text($maxNbChars = 1500),
				'user_id' => $faker->numberBetween($min = 1, $max = 100)

			]);
		}
	}

}