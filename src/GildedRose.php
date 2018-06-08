<?php

namespace Runroom\GildedRose;

class GildedRose
{

    private $items;

    function __construct($items)
    {
        $this->items = $items;
    }

    function updateQuality()
    {
        foreach ($this->items as $item) {
            switch ($item->name) {
                case 'Aged Brie':
                    $item->quality += 1;
                    $item->sellIn  -= 1;

                    if ($item->sellIn <= 0) {
                        $item->quality += 1;
                    }

                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }

                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $item->quality += 1;

                    if ($item->sellIn <= 10) {
                        $item->quality += 1;
                    }
                    if ($item->sellIn <= 5) {
                        $item->quality += 1;
                    }
                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }
                    if ($item->sellIn <= 0) {
                        $item->quality = 0;
                    }

                    $item->sellIn -= 1;

                    break;
                case 'Sulfuras, Hand of Ragnaros':

                    break;
                default:
                    $item->quality -= 1;
                    $item->sellIn  -= 1;
                    if ($item->sellIn < 0) {
                        $item->quality -= 1;
                    }
                    if ($item->quality < 0) {
                        $item->quality = 0;
                    }

                    break;
            }
        }
    }
}
