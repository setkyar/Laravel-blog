laravelblog
===========
Open command at the application directory

make 	-composer update

Create database laravel-blog

Edit in app/config/database.php

My Setting is the following. You need to customize for your setting.

'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'laravel-blog',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		)
		
Open command at the application directory

make 	-php artisan migrate
		-php artisan db:seed
		
Now application is ready to use :)

To Admin Dashboard
==================

- AppURL/admin
Email 		-setkyar16@gmail.com
Password 	-admin




