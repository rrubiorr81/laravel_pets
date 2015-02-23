<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;


class ClientsTableSeeder extends Seeder {
	public function run()
	{
		$faker = Faker::create();
		foreach (range(1, 25) as $index)
		{
			App\Client::create([
				               'email'  => $faker->email(),
				               'name'   => $faker->name
			               ]);
		}
	}
}
