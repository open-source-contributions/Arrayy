<?php

declare(strict_types=1);

namespace Arrayy\Type;

use Arrayy\ArrayyIterator;
use Arrayy\Collection\Collection;

/**
 * @phpstan-template T
 * @phpstan-extends Collection<T>
 */
final class InstanceCollection extends Collection implements TypeInterface
{
    /**
     * @param array<object> $data
     * @param string|null   $iteratorClass
     * @param bool|null     $checkPropertiesInConstructor
     * @param string|null   $className
     *
     * @phpstan-param class-string|null $iteratorClass
     * @phpstan-param class-string|null $className
     */
    public function __construct(
        array $data = [],
        string $iteratorClass = null,
        bool $checkPropertiesInConstructor = null,
        string $className = null
    ) {
        // fallback
        if ($iteratorClass === null) {
            $iteratorClass = ArrayyIterator::class;
        }
        if ($checkPropertiesInConstructor === null) {
            $checkPropertiesInConstructor = true;
        }

        parent::__construct(
            $data,
            $iteratorClass,
            $checkPropertiesInConstructor,
            self::convertIntoTypeCheckArray($className)
        );
    }
}
