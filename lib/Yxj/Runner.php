<?php
namespace Yxj;

class Runner {
    public static function runApp() {
        static::initialize();
        static::rewriteMethod();
        $path = Routing\Router::execute();
        var_dump($path);
        //TODO: 测试是否存在 session_id 的 cookie，如果存在，打开 session
        if ($path !== null) {
            \Hyperframework\Web\Application::run($path);
        }
    }

    public static function runAssetProxy() {
        static::initialize();
        \Hyperframework\Web\AssetProxy::run();
    }

    private static function initialize() {
        require ROOT_PATH . DIRECTORY_SEPARATOR .
            'config' . DIRECTORY_SEPARATOR .
            'env' . DIRECTORY_SEPARATOR . 'env.config.php';
        \Hyperframework\Config::set('Hyperframework\AppPath', ROOT_PATH);
        require HYPERFRAMEWORK_PATH . DIRECTORY_SEPARATOR . 'ClassLoader.php';
        \Hyperframework\ClassLoader::run();
        \Hyperframework\Web\ExceptionHandler::run();
    }

    private static function rewriteMethod() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method'])) {
            $_SERVER['REQUEST_METHOD'] = $_POST['_method'];
        }
    }
}
