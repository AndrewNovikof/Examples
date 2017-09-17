<?php

namespace AndrewNovikof\Objects\Facades;

use Illuminate\Support\Facades\Facade;
use AndrewNovikof\Objects\Interfaces\ObjectsInterface;

class Objects extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'objects';
    }
}
