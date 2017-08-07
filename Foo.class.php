<?php
class Foo {
    public $debug;
    public $config;

    function __construct() {
        $this->debug = False;
    }

    function __destruct() {
        $this->config = file_get_contents('config.php');
        if ($this->debug) {
            echo $this->config;
        }
    }
}
