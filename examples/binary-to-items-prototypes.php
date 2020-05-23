<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Mutant\ItemsManager\Converter\BinaryToHexConverter;
use Mutant\ItemsManager\Manager\AlphaItemsManager;
use Mutant\ItemsManager\Mapper\Item\Prototype\HexStringToItemPrototypeMapper;

$hex = '0EEFFF00005DE37F09007a0000000000';
$hex .= '287FFF0007A9094F00C0000000000000';
$hex .= '6A7F96003F80D07F00707F010E170B1F';
$binary = hex2bin($hex);

$converter = new BinaryToHexConverter();
$mapper = new HexStringToItemPrototypeMapper();
$manager = new AlphaItemsManager($converter, $mapper);

$prototypes = $manager->convertBinaryToItemsPrototypes($binary);

foreach ($prototypes as $prototype) {
    var_dump($prototype);
}
