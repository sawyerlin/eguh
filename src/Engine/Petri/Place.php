<?php namespace Engine\Petri;

use \Threaded;

class Place extends Node {

    public function __construct() {
        parent::__construct();
    }

    public function move() {
        foreach($this->arcs as $arc) {
            $threaded = Threaded::from(function() use (&$arc) {
                $arc->node->move();
            });

            $threaded->run();
        }
    }
}
