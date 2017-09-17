<?php

namespace AndrewNovikof\Objects\Exceptions;

class ObjectsMakeException extends \Exception
{
    /**
     * @param string $configName
     * @return static
     */
    public static function badConfig(string $configName)
    {
        return new static("Name `{$configName}` not found in config file.");
    }

    /**
     * @param string $className
     * @return static
     */
    public static function badClass(string $className)
    {
        return new static("Class `{$className}` not found.");
    }

    /**
     * @param string $methodName
     * @return static
     */
    public static function badMethod(string $methodName)
    {
        return new static("Method `{$methodName}` not found.");
    }
}
