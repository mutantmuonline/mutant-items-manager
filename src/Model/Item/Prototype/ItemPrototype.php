<?php

declare(strict_types=1);

namespace Mutant\ItemsManager\Model\Item\Prototype;

/**
 * @todo this should be DTO
 * @todo replace `mixed` type with correct one
 */
class ItemPrototype implements ItemPrototypeInterface
{
    private $id;
    private $level;
    private $serial;
    private $type;
    private $option;
    private $duration;
    private $excellent;
    private $sockets;
    private $harmony;
    private $harmonyValue;
    private $ancient;
    private $refinery;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return ItemPrototype
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     *
     * @return ItemPrototype
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param mixed $serial
     *
     * @return ItemPrototype
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return ItemPrototype
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     *
     * @return ItemPrototype
     */
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     *
     * @return ItemPrototype
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExcellent()
    {
        return $this->excellent;
    }

    /**
     * @param mixed $excellent
     *
     * @return ItemPrototype
     */
    public function setExcellent($excellent)
    {
        $this->excellent = $excellent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSockets()
    {
        return $this->sockets;
    }

    /**
     * @param mixed $sockets
     *
     * @return ItemPrototype
     */
    public function setSockets($sockets)
    {
        $this->sockets = $sockets;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHarmony()
    {
        return $this->harmony;
    }

    /**
     * @param mixed $harmony
     *
     * @return ItemPrototype
     */
    public function setHarmony($harmony)
    {
        $this->harmony = $harmony;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHarmonyValue()
    {
        return $this->harmonyValue;
    }

    /**
     * @param mixed $harmonyValue
     *
     * @return ItemPrototype
     */
    public function setHarmonyValue($harmonyValue)
    {
        $this->harmonyValue = $harmonyValue;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAncient()
    {
        return $this->ancient;
    }

    /**
     * @param mixed $ancient
     *
     * @return ItemPrototype
     */
    public function setAncient($ancient)
    {
        $this->ancient = $ancient;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefinery()
    {
        return $this->refinery;
    }

    /**
     * @param mixed $refinery
     *
     * @return ItemPrototype
     */
    public function setRefinery($refinery)
    {
        $this->refinery = $refinery;

        return $this;
    }
}
