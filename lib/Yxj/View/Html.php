<?php
namespace Yxj\View;
use \Hyperframework\Web\View\Asset\AssetUrl;

class Html {
    public function render() {
        //default js namespace js/yxj
        \Hyperframework\Config::set(
            'Hyperframework\Web\View\Asset\AssetUrl\CacheVersionEnabled', true
        );
        echo '<html><head></head>';
        echo '<body>';
        echo AssetUrl::get('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1.js');
        echo "\n";
        echo AssetUrl::get('common.js');
        echo "\n";
        echo AssetUrl::get('one');
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
