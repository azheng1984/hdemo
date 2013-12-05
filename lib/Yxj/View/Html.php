<?php
namespace Yxj\View;

class Html {
    public function render() {
        //default js namespace js/yxj
        \Hyperframework\Config::set(
            'Hyperframework\Web\View\Asset\CacheVersionEnabled', true
        );
        echo '<html><head></head>';
        echo '<body><script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>';
        \Hyperframework\Web\View\Asset::renderJsLink('common');
        echo '</body></html>';
        // /asset/js/yxj/common.js
        /*
        echo '<script src="/js/xyj/common.js"></script>';
        // /asset/js/common.js.php
        Asset::renderJsLink('/js/tv/common.js');
        //vendor self render + host read vendor's manifest
        // /vendor/tv/public/js/tv/common-v213.js
        echo '<script src="/js/tv/common-v122.js"></script>';
        // /js/yxj/common-v122+/js/yxj/jquery-v1.2.1.min+list-v3233.js => named => /js/yxj/combined_abc-v123.js
        */
    }
}
