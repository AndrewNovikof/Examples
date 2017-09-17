<?php

namespace AndrewNovikof\Objects;

use AndrewNovikof\Objects\Exceptions\ObjectsMakeException;
use Illuminate\Support\Facades\Config;

class ObjectsService
{
    /**
     * Create a new Object instance.
     *
     * @param string $configName
     * @return string
     * @throws ObjectsMakeException
     */
    public function make(string $configName)
    {
        if (!$objectsConfig = Config::get("objects.$configName")) {
            throw ObjectsMakeException::badConfig($configName);
        };

        $object = $this->getObject($objectsConfig);
        $this->invokeMethods($object, $objectsConfig);
        return $object;
    }

    /**
     * @param array $objectsConfig
     * @return object
     * @throws ObjectsMakeException
     */
    protected function getObject(array $objectsConfig)
    {
        $reflection = new \ReflectionClass($objectsConfig['class']);
        if (!$reflection->isInstantiable()) {
            throw ObjectsMakeException::badClass($objectsConfig['class']);
        }
        if (!$reflection->hasMethod('age')) {
            throw ObjectsMakeException::badMethod('age');
        }
        if (!$reflection->hasMethod('class')) {
            throw ObjectsMakeException::badMethod('class');
        }
        return $reflection->newInstance();
    }

    /**
     * @param $object
     * @param $objectsConfig
     */
    protected function invokeMethods($object, $objectsConfig)
    {
        $method = new \ReflectionMethod($object, 'age');
        $method->invoke($object, isset($objectsConfig['age']) ? $objectsConfig['age'] : 0);
        $method = new \ReflectionMethod($object, 'class');
        $method->invoke($object);
    }
}