<?php namespace Engine\Petri;

class Transition extends Node {

    public $activity;

    public function __construct(Activity $activity) {
        parent::__construct();
        $this->activity = $activity;
        $this->activity->init();
    }

    public function move() {
        
        $this->activity->run();
        
        foreach($this->arcs as $arc) {
            $arc->node->move();
        }
    }
}

?>
