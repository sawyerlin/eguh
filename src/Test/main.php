<?php

require_once('Ioc/SContainerInterface.php');
require_once('Ioc/SContainer.php');
require_once('Model/Action.php');
require_once('Plugin/Test/TestAction.php');
require_once('Lib/TestLib/TesterInterface.php');
require_once('Lib/TestLib/Tester.php');
require_once('Engine/Parser/ParserInterface.php');
require_once('Engine/Parser/JsonParser.php');

$parser = new Engine\Parser\JsonParser;

$json = $parser->parse("Engine/Config/ImageUpload.json");

var_dump($json->dependencies[0]->abstract->src);

/*$container = new Ioc\SContainer();*/

//$container->register("Lib\TestLib\TesterInterface", "Lib\TestLib\Tester");

//$obj = $container->resolve("Plugin\Test\TestAction");

/*echo $obj->run();*/

?>
