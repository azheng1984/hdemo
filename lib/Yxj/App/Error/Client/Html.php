<?php
namespace Yxj\App\Error\Client;

class Html {
  public function render() {
    if ($GLOBALS['EXCEPTION_HANDLER']->getException() === null) {
      throw new NotFoundException;
    }
    echo '<h1>500 Internal Server Error</h1><pre>';
    echo $GLOBALS['EXCEPTION_HANDLER']->getException();
    echo '</pre>';
  }
}
