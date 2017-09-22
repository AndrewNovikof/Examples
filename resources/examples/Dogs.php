<?php
declare(strict_types=1);

namespace App\Examples;

use AndrewNovikof\Objects\Factories\AbstractFactory;

/**
 * Class Dogs
 * @package Examples
 */
class Dogs extends AbstractFactory
{
    /**
     * {@inheritDoc}
     */
    public function age() : int
    {
        return 7;
    }
}