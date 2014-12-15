<?php namespace Engine;

use IOC\SContainer;
use Engine\Petri\Place;
use Engine\Petri\Transition;
use Engine\Petri\Arc;

class Process {

    public $id;

    public $status;

    public $token;

    public $startPlace;
    
    public function __construct() {
        // Create StartPlace
        $this->startPlace = $startPlace = new Place;
        $startPlace->name = "Begin Place";
        $startPlace->description = "Begin Place Description";
        $startPlace->arcs = [];

        // Create Activity
        $container = new SContainer;
        $container->register("Lib\TestLib\TesterInterface", "Lib\TestLib\Tester");
        $activity = $container->resolve("Activities\TestActivity\TestActivity");
         
        // Create FirstTransition
        $firstTransition = new Transition($activity);
        $firstTransition->name = "First Transition";
        $firstTransition->description = "First Transition Description";
        $firstTransition->arcs = [];

        // Create FirstArc Out
        $firstArcOut = new Arc;
        $firstArcOut->node = $firstTransition;
        array_push($startPlace->arcs, $firstArcOut);

        // Create FirstPlace
        $firstPlace = new Place;
        $firstPlace->name = "First Place";
        $firstPlace->description = "First Place Description";
        $firstPlace->arcs = [];

        // Create FirstArc In
        $firstArcIn= new Arc;
        $firstArcIn->node = $firstPlace;
        array_push($firstTransition->arcs, $firstArcIn);
    }

    public function run() {
        $this->startPlace->move();
    }
}

?>
