<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;


class FlagsTableSeeder extends Seeder {
	public function run()
	{
		$faker = Faker::create();
		foreach (range(1, 25) as $index)
		{
			App\Flag::create([
				               'description'  => $faker->sentence(2),
				               'code'   => $faker->word()
			               ]);
		}
	}
}