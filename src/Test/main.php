<?php

// Add references
require_once('Ioc/SContainerInterface.php');
require_once('Ioc/SContainer.php');
require_once('Lib/TestLib/TesterInterface.php');
require_once('Lib/TestLib/Tester.php');
require_once('Engine/Petri/Node.php');
require_once('Engine/Petri/Place.php');
require_once('Engine/Petri/Transition.php');
require_once('Engine/Petri/Token.php');
require_once('Engine/Petri/Activity.php');
require_once('Engine/Petri/Arc.php');
require_once('Engine/Process.php');
require_once('Engine/Workflow.php');
require_once('Engine/WorkflowEngine.php');
require_once('Engine/Parser/ParserInterface.php');
require_once('Engine/Parser/JsonParser.php');
require_once('Activities/TestActivity/TestActivity.php');
require_once('Activities/FolderScanActivity/FolderScanActivity.php');

$process = new Engine\Process;

$process->run();

/*$parser = new Engine\Parser\JsonParser;*/

//$json = $parser->parse("Engine/Config/ImageUpload.json");

/*var_dump($json->dependencies[0]->abstract->src);*/

/*$container = new Ioc\SContainer();*/

//$container->register("Lib\TestLib\TesterInterface", "Lib\TestLib\Tester");

//$obj = $container->resolve("Plugin\Test\TestAction");

/*echo $obj->run();*/

?>
