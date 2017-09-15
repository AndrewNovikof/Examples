<?php

namespace Objects\Traits;

trait ObjectsTrait
{
    /**
     * If age() function don't set in implementation class, return zero
     *
     * @return int
     */
    public function age() : int
    {
        return 0;
    }
}