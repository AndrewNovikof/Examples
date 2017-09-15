<?php
declare(strict_types=1);

namespace Examples;

use Objects\Factories\AbstractFactory;

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