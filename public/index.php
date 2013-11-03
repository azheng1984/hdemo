<?php
namespace Yxj;

define(__NAMESPACE__ . '\ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
require ROOT_PATH . 'lib' . DIRECTORY_SEPARATOR .
    __NAMESPACE__ . DIRECTORY_SEPARATOR . 'Runner.php';
Runner::run();
