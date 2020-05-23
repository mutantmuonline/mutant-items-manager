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
        $string .= dechex($item->getId());
        $string .= dechex($item->getOption());
        $string .= dechex($item->getDuration());
        $string .= dechex($item->getSerial());
        $string .= dechex($item->getExcellent());
        $string .= dechex($item->getAncient());
        $string .= dechex($item->getType());
        $string .= dechex($item->getRefinery());
        $string .= dechex($item->getHarmony());
        $string .= dechex($item->getHarmonyValue());
        $string .= dechex($sockets[0]);
        $string .= dechex($sockets[1]);
        $string .= dechex($sockets[2]);
        $string .= dechex($sockets[3]);
        $string .= dechex($sockets[4]);

        return $string;
    }
}
