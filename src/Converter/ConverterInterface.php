<?php

declare(strict_types=1);

namespace Mutant\ItemsManager\Converter;

use IteratorAggregate;

interface ConverterInterface
{
    public function convert(string $string): IteratorAggregate;
}
