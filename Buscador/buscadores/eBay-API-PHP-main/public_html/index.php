<?php
/**
 * Bare bones MVC app to demo a few eBay API calls.
 * This mvc framework is overkill for the few files included in this
 * project. But the framework may be useful if you build your own project
 * using this as a template and add your own work. 
 *
 * @author RickApps
 * @link https://rickapps.com
 * @license http://opensource.org/licenses/MIT MIT License
 */

// Project root is in a folder that cannot be served by your web server.
// Php can access the folder, but no user can enter a url into their
// web browser that can access the contents of the folder at project root.
// The web server should be set to serve the files in folder public_html
// such as this index.php file.
define('PROJECT_ROOT', '/home/rickapps/Projects/eBay-API-PHP');
// How it is defined for a hostgator subdomain. The subdomain root folder 
// is /home2/hostgator12/php-mvc.rickapps.com/public_html.
//define('PROJECT_ROOT', '/home2/hostgator12/php-mvc.rickapps.com');

// load program constants and config stuff
require PROJECT_ROOT . '/application/config/DemoConstants.php';

// load application class
require PROJECT_ROOT . '/application/libs/application.php';
require PROJECT_ROOT . '/application/libs/controller.php';

// start the application
$app = new Application();
