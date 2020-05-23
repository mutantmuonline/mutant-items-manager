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
        $string .= sprintf("%02X", $item->getId(), 00);
        $string .= sprintf("%02X", $item->getOption(), 00);
        $string .= sprintf("%02X", $item->getDuration(), 00);
        $string .= $item->getSerial();
        $string .= sprintf("%02X", $item->getExcellent(), 00);
        $string .= sprintf("%02X", $item->getAncient(), 00);
        $string .= sprintf("%02X", $item->getType(), 00);
        $string .= dechex($item->getHarmony());
        $string .= dechex($item->getHarmonyValue());
        $string .= sprintf("%02X", $sockets[0], 00);
        $string .= sprintf("%02X", $sockets[1], 00);
        $string .= sprintf("%02X", $sockets[2], 00);
        $string .= sprintf("%02X", $sockets[3], 00);
        $string .= sprintf("%02X", $sockets[4], 00);

        return $string;
    }
}
