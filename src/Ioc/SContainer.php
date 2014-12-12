<?php namespace Ioc;

use ReflectionClass;

class SContainer implements SContainerInterface {

    protected $registrations; 

    public function __construct () {

        $this->registrations = [];
    }

    public function register($interface, $class) {

        $this->registrations[$interface] = $class;
    }

    // Support Only Constructor Injection
    public function resolve($concrete) {

        $reflector = new ReflectionClass($concrete);

        $constructor = $reflector->getConstructor();

        $parameters = $constructor->getParameters();

        $instances = [];
        
        // ToDo: Reflection of $obj to inject parameters of each method (constructor, public methods)
        foreach ($parameters as $parameter) {

            $parameterType = $parameter->getClass();

            // Is reference type
            if (is_object($parameterType)) {
                $parameterTypeName = $parameterType->getName();
                $parameterValue = $this->build($parameterTypeName);

                array_push($instances, $parameterValue);
            }
        }

        return $reflector->newInstanceArgs($instances);
    }

    private function build ($abstract) {

        $concrete = $this->registrations[$abstract];

        if (!is_null($concrete)) {
            $reflector = new ReflectionClass($concrete);

            return $reflector->newInstance();
        }
    }
}

?>
