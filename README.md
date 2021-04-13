# Antique-Shop-using-MVC
A simple primitive application made using Codeigniter under MVC architecture.

## Steps for deploy:

1. Copy the contents of the  repo into our localhost system. (Xampp, Wamp etc.)
2. Import the `thenus_antique_shop.sql` dump file into your DBMS.


3. Change the  existing content of [application/config/database.php](application/config/database.php) to :

```php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'USER_NAME',
	'password' => '',
	'database' => 'DATABASE_NAME_OF_STEP_2',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

## Feedback:

This was a last minute done procrastinated assignment :stuck_out_tongue: 
