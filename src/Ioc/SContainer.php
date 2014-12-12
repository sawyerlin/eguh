<?php namespace Ioc;

use ReflectionClass;

class SContainer implements SContainerInterface {

    protected $registrations; 

    public function __construct () {

        $this->registrations = [];
    }

    public function register($interface, $class) {

        $this->registrations[$interface] = new ReflectionClass($class);
    }

    public function resolve($obj) {

        $class= get_class($obj);

        $reflector = new ReflectionClass($class);

        $methods = $reflector->getMethods();

        // ToDo: Reflection of $obj to inject parameters of each method (constructor, public methods)
        foreach ($methods as $method) {

            $parameters = $method->getParameters();

            foreach ($parameters as $parameter) {
                $class = $parameter->getClass();
                if (is_object($class)) {
                    return $this->registrations[$class->getName()]->newInstance();
                }
            }
        }
    }
}

?>
