<?php
namespace Yxj;

define(__NAMESPACE__ . '\ROOT_PATH', dirname(__DIR__));
require ROOT_PATH . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR
    . __NAMESPACE__ . DIRECTORY_SEPARATOR . 'Runner.php';
Runner::runAssetProxy();
