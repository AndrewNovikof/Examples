<?php

namespace Objects\Facades;

use Illuminate\Support\Facades\Facade;
use Objects\Interfaces\ObjectsInterface;

class Objects extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return ObjectsInterface::class;
    }
}
