<?php
namespace Yxj\View;

class Html {
    public function render() {
        Asset::renderJsLink('/js/yxj/common.js');
        // /asset/js/common.js.php
        Asset::renderJsLink('/js/tv/common.js');
        // /vendor/tv/public/js/tv/tv.js
        echo '<script src="/js/common-v122.js"></script>';
    }
}
