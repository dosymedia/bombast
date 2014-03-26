<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();
		$user = User::create(array(
			'user_name'		=>	'admin',
			'user_display'	=>	'Terri',
			'email'			=>	'terri@mail.com',
			'password'		=>	Hash::make('cahuna'),
			'user_location'	=>	'New York',
			'user_intro'	=>	'I\'m an artist and web developer interested in visual narrative.',
		));

		/* Faker
		
		$faker = Faker/Factory::create();

		for ($i = 0; $i <25; $i++)
		{
			$user = User::create(array(
				'user_name'		=>	$faker->userName,
				'user_display'	=>	$faker->firstName,
				'email'			=>	$faker->safeEmail,
				'password'		=>	$faker->word,
				'user_location'	=>	$faker->state,
				'user_intro'	=>	$faker->text($maxNbChars = 150),
			));
		}

		*/
	}

}