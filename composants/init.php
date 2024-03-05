<?php
defined('APP_WEB') OR exit('Access Denied!');

define("WEBSITE_LOGO", "assets\img\logo_home_to_success.jpg");
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

$whatsapp = '<a href= https://wa.me/+12157150706?text=Bonjour j\'aimerai avoir plus d\'information">+1 215 7150706</a>';
$numero = '<a href="tel:+12157150706">+1 215 7150706</a>';
define("WEBSITE_NUM", $whatsapp );
define("WEBSITE_EMAIL", '<a href="mailto:info@hometosuccess.com">info@hometosuccess.com</a>');
define("WEBSITE_ADDRESS", 'A108 Adam Street, New York, NY 535022');

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


