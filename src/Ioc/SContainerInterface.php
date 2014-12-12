<?php namespace Ioc;

interface SContainerInterface {

    public function register($interface, $class);

    public function resolve($obj);

}

?>
