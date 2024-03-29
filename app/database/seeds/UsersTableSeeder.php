<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			User::create([
				'email' => $faker->email,
				'password' => Hash::make($faker->word),
				'permission' => $faker->numberBetween($min=1, $max=2)
			]);
		}
	}

}