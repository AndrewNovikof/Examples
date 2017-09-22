<?php
declare(strict_types=1);

namespace App\Examples;

use AndrewNovikof\Objects\Factories\AbstractFactory;

/**
 * Class Cats
 * @package Examples
 */
class Cats extends AbstractFactory
{
    /**
     * {@inheritDoc}
     */
    public function age(): int
    {
        return 3;
    }
}