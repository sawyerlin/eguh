<?php

require_once('Ioc/SContainerInterface.php');
require_once('Ioc/SContainer.php');
require_once('Model/Action.php');
require_once('Plugin/Test/TestAction.php');
require_once('Lib/TestLib/TesterInterface.php');
require_once('Lib/TestLib/Tester.php');

$container = new Ioc\SContainer();

$container->register("Lib\TestLib\TesterInterface", "Lib\TestLib\Tester");

$obj = $container->resolve("Plugin\Test\TestAction");

echo $obj->run();

?>
