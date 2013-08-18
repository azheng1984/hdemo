<?php
//chdir('..');
//echo `hf build`;
//chdir('public');
//print_r(array(1 + 1, 'a' .'b', rand()));
define('ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('CACHE_PATH', ROOT_PATH . 'cache' . DIRECTORY_SEPARATOR);
define('CONFIG_PATH', ROOT_PATH . 'config' . DIRECTORY_SEPARATOR);
define('HYPERFRAMEWORK_PATH', '/home/azheng/jk2010/vendor/hyperframework/');
require HYPERFRAMEWORK_PATH . 'class_loader' . DIRECTORY_SEPARATOR .
    'lib' . DIRECTORY_SEPARATOR . 'ClassLoader.php';
$CLASS_LOADER = new Hyperframework\ClassLoader;
$CLASS_LOADER->run();
$EXCEPTION_HANDLER = new Hyperframework\Web\ExceptionHandler;
$EXCEPTION_HANDLER->run();
$APP = new Hyperframework\Web\Application;
$APP->run();
phpinfo();
