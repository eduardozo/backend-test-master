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
     * @param $sell_in
     * @param $quality
     */
    function __construct($name, $sell_in, $quality)
    {
        $this->name    = $name;
        $this->sellIn  = $sell_in;
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
