<?php
// URL Default
$protocol = 'http://'; //keamanan website
$host = ($_SERVER["HTTP_HOST"]); //get url
$path = '/MVC'; //filebpatch

define('BASEURL', $protocol . $host . $path);
define('USERURL', $protocol . $host . $path . '/public');

// Opsi
// jaringan local
// HTTP_HOST
// jaringan internet
// HTTP_REFERER

// Method dan Index Default
$method = 'Example'; //method
$index = 'index'; //index

define('Home', $method);
define('index', $index);

// Database
$hostdb = '127.0.0.1';
$userdb = 'root';
$passdb = '';
$namedb = 'mvc';

define('DB_HOST', $hostdb);
define('DB_USER', $userdb);
define('DB_PASS', $passdb);
define('DB_NAME', $namedb);