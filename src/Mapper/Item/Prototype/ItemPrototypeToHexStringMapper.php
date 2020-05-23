<?php

declare(strict_types=1);

namespace Mutant\ItemsManager\Mapper\Item\Prototype;

use Mutant\ItemsManager\Model\Item\Prototype\ItemPrototypeInterface;

class ItemPrototypeToHexStringMapper implements ItemPrototypeToStringMapperInterface
{
    public function fromItemPrototype(ItemPrototypeInterface $itemPrototype): string
    {
        return $this->forkHexStringFromItemPrototype($itemPrototype);
    }

    protected function forkHexStringFromItemPrototype(ItemPrototypeInterface $item): string
    {
        $sockets = $item->getSockets();

        $string = '';
        $string .= sprintf("%02X", $item->getId());
        $string .= sprintf("%02X", $item->getOption());
        $string .= sprintf("%02X", $item->getDuration());
        $string .= $item->getSerial();
        $string .= sprintf("%02X", $item->getExcellent());
        $string .= sprintf("%02X", $item->getAncient());
        $string .= sprintf("%02X", $item->getType());
        $string .= dechex($item->getHarmony());
        $string .= dechex($item->getHarmonyValue());
        $string .= sprintf("%02X", $sockets[0]);
        $string .= sprintf("%02X", $sockets[1]);
        $string .= sprintf("%02X", $sockets[2]);
        $string .= sprintf("%02X", $sockets[3]);
        $string .= sprintf("%02X", $sockets[4]);

        return $string;
    }
}
