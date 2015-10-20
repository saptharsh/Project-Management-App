<?php

/*
 * Defining the database constants which we are using to connect the DB 
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc');
define('DB_USER', 'root');
define('DB_PASS', 'root');


// Always provide a trailing SLASH (/) after a path
define('URL','https://localhost:444/mvc/');
define('Libs', 'libs/');

/*
 * This Key is specific to the Website
 */
//The site_wide hash key, do not change this at any cost. Used to store the password securely
define('HASH_KEY', 'lsh%$&(*%^$##$&*((975SDHjh%$$&87KDSgdjh%#%$457jsdf');

