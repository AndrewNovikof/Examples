<?php

namespace AndrewNovikof\Objects\Factories;

use AndrewNovikof\Objects\Interfaces\ObjectsInterface;
use AndrewNovikof\Objects\Traits\ObjectsTrait;

/**
 * Class AbstractFactory
 * @package Objects\Factories
 */
abstract class AbstractFactory implements ObjectsInterface
{
    use ObjectsTrait;

    /**
     * Create a new Object instance.
     *
     * @param string $data
     * @return string
     */
    public function make(string $data)
    {
        return 'ok';
    }
}
