<?php
namespace Yxj\Article\Add;

var_dump(array('hi' => require __DIR__ . '/robots.txt' ));
var_dump(array('hi' => 123));
exit;

define(__NAMESPACE__ . '\ROOT_PATH', dirname(__DIR__));
require ROOT_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR
    . 'env' . DIRECTORY_SEPARATOR . 'init.php';
require HYPERFRAMEWORK_PATH . DIRECTORY_SEPARATOR . 'Hyperframework'
    . DIRECTORY_SEPARATOR . 'Web' . DIRECTORY_SEPARATOR . 'Runner.php';
\Hyperframework\Web\Runner::run(HYPERFRAMEWORK_PATH, __NAMESPACE__);
