<?php

namespace AndrewNovikof\Objects\Traits;

trait ObjectsTrait
{
    /**
     * If age($age) function don't set in implementation class, return zero
     *
     * @param int $age
     * @return int
     */
    public function age($age = 0) : int
    {
        return $age;
    }

    /**
     * Return ClassName
     *
     * @return string
     */
    public function class()
    {
        return get_class($this);
    }
}