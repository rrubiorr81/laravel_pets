<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CountriesTableSeeder extends Seeder{

	public function run ()
	{
		DB::table('countries')->delete();
	}


}