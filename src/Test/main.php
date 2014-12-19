<?php

function __autoload($className) {

    echo "Loading Class ".$className."\n";
    $classPath = dirname(__File__).'/../'.str_replace('\\', '/', $className).'.php';

    require_once $classPath;

}

$process = new Engine\Process;

$process->run();
