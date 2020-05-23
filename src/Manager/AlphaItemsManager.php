<?php
declare(strict_types=1);

namespace Mutant\ItemsManager\Manager;

use Mutant\ItemsManager\Decoder\DecoderInterface;
use Mutant\ItemsManager\Mapper\Item\Prototype\StringToItemPrototypeMapperInterface;
use IteratorAggregate;

class AlphaItemsManager
{
    /**
     * @var DecoderInterface
     */
    private $decoder;

    /**
     * @var StringToItemPrototypeMapperInterface
     */
    private $itemPrototypeMapper;

    public function __construct(DecoderInterface $decoder, StringToItemPrototypeMapperInterface $itemPrototypeMapper)
    {
        $this->decoder = $decoder;
        $this->itemPrototypeMapper = $itemPrototypeMapper;
    }

    public function convertBinaryToItemsPrototypes(string $binary): IteratorAggregate
    {
        $decodedItemsStrings = $this->decoder->decode($binary);
        $itemsPrototypes = new \ArrayObject();

        // Map string to prototype of item model
        foreach ($decodedItemsStrings->getIterator() as $itemString) {
            $itemPrototype = $this->itemPrototypeMapper->fromString($itemString);
            $itemsPrototypes->append($itemPrototype);
        }

        return $itemsPrototypes;
    }
}
