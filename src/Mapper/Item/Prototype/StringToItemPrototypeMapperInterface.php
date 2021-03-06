<?php

declare(strict_types=1);

namespace Mutant\ItemsManager\Mapper\Item\Prototype;

use Mutant\ItemsManager\Model\Item\Prototype\ItemPrototypeInterface;

interface StringToItemPrototypeMapperInterface
{
    public function fromString(string $string): ItemPrototypeInterface;
}
