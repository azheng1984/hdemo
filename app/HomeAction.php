<?php
namespace Hft\Application;

class HomeAction {
    public function before() {
        echo 'before';
    }

    public function get() {
        echo 'get~';
    }

    public function post() { 
    }

    public function put() {
    }

    public function delete() {
    }

    public function after() {
        echo 'after~';
    }
}
