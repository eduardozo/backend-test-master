<?php

namespace Runroom\GildedRose;

class GildedRose
{

    private $items;

    /**
     * GildedRose constructor.
     *
     * @param $items
     */
    function __construct($items)
    {
        $this->items = $items;
    }

    function updateQuality()
    {
        foreach ($this->items as $item) {
            switch ($item->name) {
                case 'Aged Brie':
                    AgeBrie::updateQuality($item);

                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    Backstage::updateQuality($item);

                    break;
                case 'Sulfuras, Hand of Ragnaros':

                    break;
                default:
                    ItemDefault::updateQuality($item);

                    break;
            }
        }
    }
}
