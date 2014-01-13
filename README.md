laravelblog
===========
Open command at the application directory (At Window Ctrl+R and type cmd and at Linux ubuntu Ctrl+Alt+t)

And Type **composer update**. You need to wait for downloading packages.

**Create a database in your phpmyadmin**

As for me I create a **laravel-blog** database.

Edit your app configuration

- app/config/database.php


- app/config/database.php

At the database setting

  `'host' => 'localhost',` (Put your host)

  `'database' => 'laravel-blog',` (Put your database)

  `'username' => 'root',` (Put your database user name)

  `'password' => ''` (Put your database password)


Open command prompt or terminal at the application directory and type `php artisan migrate db:seed` for demo user

Now application is ready to use!

Go to `www.example.com/admin`! It's to your application admin. We already make demo user so 

`email` => `setkyar16@gmail.com`

`password` => `admin`




