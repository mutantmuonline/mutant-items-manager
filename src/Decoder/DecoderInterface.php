<?php
declare(strict_types=1);

namespace Mutant\ItemsManager\Decoder;

use IteratorAggregate;

interface DecoderInterface
{
    public function decode(string $binary): IteratorAggregate;
}
