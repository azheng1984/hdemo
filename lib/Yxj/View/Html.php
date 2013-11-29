<?php
namespace Yxj\View;

class Html {
    public function render() {
        //default js namespace js/yxj
        Asset::setJsNamespace('js/yxj')
        Asset::renderJsLink('xyj/common.js');
        // /asset/js/yxj/common.js
        echo '<script src="/js/common.js"></script>';

        // /asset/js/common.js.php
        Asset::setJsNamespace('js/tv');
        Asset::renderJsLink('xyj/common.js');
        //vendor self render + host read vendor's manifest
        // /vendor/tv/public/js/tv/common-v213.js
        echo '<script src="/js/tv/common-v122.js"></script>';
        // /js/yxj/common-v122+/js/yxj/jquery-v1.2.1.min+list-v3233.js => named => /js/yxj/combined_abc-v123.js
    }
}
