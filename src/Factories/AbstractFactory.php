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
}
