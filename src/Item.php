<?php

namespace Runroom\GildedRose;

class Item
{

    public $name;
    public $sellIn;
    public $quality;

    function __construct($name, $sell_in, $quality)
    {
        $this->name    = $name;
        $this->sellIn  = $sell_in;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

}
