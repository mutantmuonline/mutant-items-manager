<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Mutant\ItemsManager\Converter\BinaryToHexConverter;
use Mutant\ItemsManager\Manager\AlphaItemsManager;
use Mutant\ItemsManager\Mapper\Item\Prototype\HexStringToItemPrototypeMapper;

$hex = '0EEFFF00005DE37F09007a0000000000';
$hex .= '287FFF0007A9094F00C0000000000000';
$hex .= '0102530010F03C0A00B000FFFFFFFFFF';
$binary = hex2bin($hex);

$converter = new BinaryToHexConverter();
$mapper = new HexStringToItemPrototypeMapper();
$manager = new AlphaItemsManager($converter, $mapper);

$prototypes = $manager->convertBinaryToItemsPrototypes($binary);

foreach ($prototypes as $prototype) {
    var_dump($prototype);
}
