<?php namespace Model;

abstract class Action {

    protected function __construct() {
    
    }

    abstract protected function init();

    abstract protected function run();
}

?>
