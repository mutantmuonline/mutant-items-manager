<?php

declare(strict_types=1);

namespace Mutant\ItemsManager\Mapper\Item\Prototype;

use Mutant\ItemsManager\Model\Item\Prototype\ItemPrototype;
use Mutant\ItemsManager\Model\Item\Prototype\ItemPrototypeInterface;

class HexStringToItemPrototypeMapper implements StringToItemPrototypeMapperInterface
{
    public function fromString(string $hexString): ItemPrototypeInterface
    {
        $item = new ItemPrototype();

        return $this->fillAndReturnItemPrototype($item, $hexString);
    }

    protected function fillAndReturnItemPrototype(ItemPrototype $item, string $hexString): ItemPrototypeInterface
    {
        $item->setId(hexdec(mb_substr($hexString, 0, 2)));
        $item->setOption(hexdec(mb_substr($hexString, 2, 2)));
        $item->setDuration(hexdec(mb_substr($hexString, 4, 2)));
        $item->setSerial(mb_substr($hexString, 6, 8));
        $item->setExcellent(hexdec(mb_substr($hexString, 14, 2)));
        $item->setAncient(hexdec(mb_substr($hexString, 16, 2)));
        $item->setType(hexdec(mb_substr($hexString, 18, 2)));
        $item->setRefinery(hexdec(mb_substr($hexString, 19, 1)));
        $item->setHarmony(hexdec(mb_substr($hexString, 20, 1)));
        $item->setHarmonyValue(hexdec(mb_substr($hexString, 21, 1)));
        $item->setSockets([
            hexdec(mb_substr($hexString, 22, 2)),
            hexdec(mb_substr($hexString, 24, 2)),
            hexdec(mb_substr($hexString, 26, 2)),
            hexdec(mb_substr($hexString, 28, 2)),
            hexdec(mb_substr($hexString, 30, 2)),
        ]);

        return $item;
    }
}
