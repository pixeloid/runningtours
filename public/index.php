<?php

date_default_timezone_set("Europe/Budapest");
setlocale(LC_ALL,'en_GB.UTF-8');


// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

defined('LIBRARY_PATH')
    || define('LIBRARY_PATH', realpath(dirname(__FILE__) . '/../library'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Define site name
defined('SITE_NAME')
    || define('SITE_NAME', (getenv('SITE_NAME') ? getenv('SITE_NAME') : 'csaladimatrica'));

// Ensure library/ is on include_path
// Ensure library/ is on include_path
set_include_path(
    implode(
        PATH_SEPARATOR,
        array(
            realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '../library'),
            realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '../library/Zend'),
            '.'
        )
    )
);
//ini_set('display_errors', 'On');
/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap()
            ->run();

