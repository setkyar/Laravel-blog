<?php 

class UserTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$user = array(
				'username' => 'admin',
				'password' => Hash::make('admin'),
				'email' => 'setkyar16@gmail.com'
			);

		User::create($user);
	}
}

