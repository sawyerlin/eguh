<?php namespace Engine\Petri;

abstract class Activity {

    public $id;

    public $status;

    protected function __construct() {
    
    }

    abstract protected function init();

    abstract protected function run();

}

?>
