<?php namespace Engine\Petri;

abstract class Node {

    public $arcs;

    public $name;

    public $description;

    protected function __construct() {
    
    }

    public abstract function move();

}

?>
