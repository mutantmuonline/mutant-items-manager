<?php
declare(strict_types=1);

namespace Mutant\ItemsManager\Model\Item\Prototype;

interface ItemPrototypeInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getLevel();

    /**
     * @return mixed
     */
    public function getSerial();

    /**
     * @return mixed
     */
    public function getType();

    /**
     * @return mixed
     */
    public function getTypeFix();


    /**
     * @return mixed
     */
    public function getOption();

    /**
     * @return mixed
     */
    public function getDuration();

    /**
     * @return mixed
     */
    public function getExcellent();

    /**
     * @return mixed
     */
    public function getSockets();

    /**
     * @return mixed
     */
    public function getHarmony();

    /**
     * @return mixed
     */
    public function getHarmonyValue();

    /**
     * @return mixed
     */
    public function getAncient();

    /**
     * @return mixed
     */
    public function getRefinery();
}
