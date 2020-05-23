<?php
declare(strict_types=1);

namespace Mutant\ItemsManager\Decoder;

use IteratorAggregate;

class BinaryToHexDecoder implements DecoderInterface
{
    /**
     * @var int
     */
    private $hexLength;

    private function __construct(int $hexLength = 32)
    {
        $this->hexLength = $hexLength;
    }

    public function decode(string $binary): IteratorAggregate
    {
        $hexString = $this->transformBinaryToHex($binary);
        $hexString = $this->removeBinaryZeroLeading($hexString);

        $iterations = round(mb_strlen($hexString) / $this->hexLength);
        $itemsArrayOfStrings = new \ArrayObject();

        for ($i = 0; $i < $iterations; $i++) {
            $itemString = mb_substr($hexString, ($this->hexLength * $i), $this->hexLength);
            $itemsArrayOfStrings->append($itemString);
        }

        return $itemsArrayOfStrings;
    }

    protected function transformBinaryToHex(string $binary): string
    {
        $unpacked = unpack('H*hex', $binary);

        return $unpacked['hex'];
    }

    protected function removeBinaryZeroLeading(string $string): string
    {
        if (mb_substr($string, 0, 2) === '0x') {
            return mb_substr($string, 2);
        }

        return $string;
    }
}
