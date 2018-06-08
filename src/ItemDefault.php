<?php
/**
 * Created by PhpStorm.
 * User: Eduardo Zaldivar
 * Date: 8/6/18
 * Time: 22:24
 */

namespace Runroom\GildedRose;


class ItemDefault
{

    /**
     * @param $item
     *
     * @return mixed
     */
    public static function updateQuality($item)
    {
        $item->quality -= 1;
        $item->sellIn  -= 1;
        if ($item->sellIn < 0) {
            $item->quality -= 1;
        }
        if ($item->quality < 0) {
            $item->quality = 0;
        }

        return $item;
    }

}