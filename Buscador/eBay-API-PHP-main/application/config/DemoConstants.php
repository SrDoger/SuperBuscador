<?php
// This is all your configuration stuff for your project 

// Error reporting. Overrides our php.ini
ini_set("display_errors", 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set to true if your web server is on a Windows machine
define('WINDOWS', false);
// URL used to serve the files that are in the public_html folder of this project
// If served from the root folder, just put /. If served from another folder:
// http://myDomainName.com/eBayDemo, you would put '/eBayDemo/'
// You also need to put this value into '/.htaccess'
define('SITE_BASE', '/');
// Put the location of your curl program here
define('CURL_PGM', '/usr/bin/curl');
// For windows, curl location might be something like below.
//define('CURL_PGM', '"C:\Program Files (x86)\Common Files\curl772-64bit\bin\curl.exe"');

// Put your eBay authorization code here
// For the calls shown, only your developer token is needed. DO NOT put the 
// word 'Basic' in front. Just include the base64 hashed value, nothing else.
// See the home/index.php page for more info.
define('AUTHORIZATION', 'Put your hashed developer authorization token here');

// If you are using a database, define your connection info here
// A database is not used by this demo so you can ignore this for now.
define('DBSTORE_USER', 'myUserName');
define('DBSTORE_PASS', 'myPassword');
define('DBSTORE_DSN', 'mysql:host=myDatabaseURI;dbname=nameOfMyDatabase');


