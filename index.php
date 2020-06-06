<?php

use App\Application;

require_once 'vendor/autoload.php';
ini_set("display_errors", 1);
error_reporting(E_ALL | E_STRICT);

$path = $_SERVER['DOCUMENT_ROOT'];
define('VIEW_PATH', $path . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR. 'resources' . DIRECTORY_SEPARATOR);
defined('CONTROLLER_NAMESPACE') or define('CONTROLLER_NAMESPACE', 'App\\Controller');
define('DEFAULT_CONTROLLER', CONTROLLER_NAMESPACE . '\\' . 'HomeController');
define('DEFAULT_ACTION', 'indexAction');


$application = new Application();
try {
    $application->run();
} catch (\DomainException $ex) {
    log($_SESSION['userId'] . 'try to access protected action');
} catch (\InvalidArgumentException $ex) {
    // status code 404
    header("Location: 404.html");
} catch (\Exception $ex) {

}
