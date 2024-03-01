<?php
defined('APP_WEB') OR exit('Access Denied!');

define("WEBSITE_LOGO", "assets/images/logo.jpg");
define("WEBSITE_TITLE", "Home To Success");
define("WEBSITE_NAME", "Home To Success");
define("WEBSITE_DESCRIPTION", "");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "Français");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

if ((empty($_SERVER['SERVER_NAME']) && php_sapi_name() == 'cli') || (!empty($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost')) {
    /** database config **/
    define('DBNAME', 'api_ps_gouv');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('URL', 'http://localhost/home_to_success/');
} else {
    /** database config **/
    define('DBNAME', 'mvc_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

    define('URL', 'https://www.hometosuccess.com/');
}

require_once 'composants/fonctions.php';
require_once 'composants/Controller.php';

$web = new Controller();
$web->index();


