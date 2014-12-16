<?php namespace Engine\Petri;

abstract class Activity {

    public $id;

    public $status;

    protected $sharedDatas;

    protected function __construct($sharedDatas) {

        $this->sharedDatas = $sharedDatas;
    }

    abstract protected function init();

    abstract protected function run();
}

?>
