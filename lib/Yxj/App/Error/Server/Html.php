<?php
namespace Yxj\App\Error\Server;

class Html {
    public function render() {
        var_dump(\Hyperframework\Web\ExceptionHandler::getException());
        //if (ErrorHandler::getException() === null) {
            //throw new NotFoundException;
        //}
        //echo '<h1>404 Not Found page</h1>';
        //trigger_error($GLOBALS['UNHANDLED_EXCEPTION'], E_USER_ERROR);
    }
}
