<?php

class Transition {

    public $id;

    public $name;

    public $description;

    // ToDo: Defin a trigger class
    public $trigger;

    public $workflowId;

    // The activity which will do some work
    public $activity;
}

?>
