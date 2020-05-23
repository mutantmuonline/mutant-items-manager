<?php
declare(strict_types=1);

namespace Mutant\ItemsManager\Manager;

use Mutant\ItemsManager\Converter\ConverterInterface;
use Mutant\ItemsManager\Mapper\Item\Prototype\StringToItemPrototypeMapperInterface;
use IteratorAggregate;

class AlphaItemsManager
{
    /**
     * @var ConverterInterface
     */
    private $converter;

    /**
     * @var StringToItemPrototypeMapperInterface
     */
    private $itemPrototypeMapper;

    public function __construct(
        ConverterInterface $converter,
        StringToItemPrototypeMapperInterface $itemPrototypeMapper
    ) {
        $this->converter = $converter;
        $this->itemPrototypeMapper = $itemPrototypeMapper;
    }

    public function convertBinaryToItemsPrototypes(string $binary): IteratorAggregate
    {
        $decodedItemsStrings = $this->converter->convert($binary);
        $itemsPrototypes = new \ArrayObject();

        // Map string to prototype item model
        foreach ($decodedItemsStrings->getIterator() as $itemString) {
            $itemPrototype = $this->itemPrototypeMapper->fromString($itemString);
            $itemsPrototypes->append($itemPrototype);
        }

        return $itemsPrototypes;
    }
}
