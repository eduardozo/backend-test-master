<?php

namespace Runroom\GildedRose;

class Item
{

    public $name;
    public $sellIn;
    public $quality;

    /**
     * Item constructor.
     *
     * @param $name
     * @param $sellIn
     * @param $quality
     */
    function __construct($name, $sellIn, $quality)
    {
        $this->name    = $name;
        $this->sellIn  = $sellIn;
        $this->quality = $quality;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

}
