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

    public $sharedDatas;
    
    public function __construct() {
        $this->sharedDatas = [];
        // Create IOC Container
        $container = new SContainer;
        $container->register("Lib\TestLib\TesterInterface", "Lib\TestLib\Tester");

        // Create StartPlace
        $this->startPlace = $startPlace = new Place;
        $startPlace->name = "Begin Place";
        $startPlace->description = "Begin Place Description";
        $startPlace->arcs = [];

        // Create Activity
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
        $firstArcIn = new Arc;
        $firstArcIn->node = $firstPlace;
        array_push($firstTransition->arcs, $firstArcIn);

        // Create Activity
        $activity = $container->resolve("Activities\FolderScanActivity\FolderScanActivity");

        // Create SecondTransition
        $secondTransition = new Transition($activity);
        $secondTransition->name = "Second Transition";
        $secondTransition->description = "Second Transition Description";
        $secondTransition->arcs = [];

        // Create SecondArc Out
        $secondArcOut = new Arc;
        $secondArcOut->node = $secondTransition;
        array_push($firstPlace->arcs, $secondArcOut);

        // Create SecondPlace
        $secondPlace = new Place;
        $secondPlace->name="Second Place";
        $secondPlace->description = "Second Place Description";
        $secondPlace->arcs = [];

        // Create SecondArc In
        $secondArcIn = new Arc;
        $secondArcIn->node = $secondPlace;
        array_push($secondTransition->arcs, $secondArcIn);
    }

    public function run() {
        $this->startPlace->move();
    }
}

?>
