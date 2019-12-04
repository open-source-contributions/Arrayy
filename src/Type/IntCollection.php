<?php

declare(strict_types=1);

namespace Arrayy\Type;

use Arrayy\Collection\Collection;

/**
 * @phpstan-extends Collection<int>
 */
final class IntCollection extends Collection implements TypeInterface
{
    /**
     * The type (FQCN) associated with this collection.
     *
     * @return string
     */
    public function getType()
    {
        return 'int';
    }
}
