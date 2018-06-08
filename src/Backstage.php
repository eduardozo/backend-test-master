<?php
/**
 * Created by PhpStorm.
 * User: Eduardo Zaldivar
 * Date: 8/6/18
 * Time: 22:21
 */

namespace Runroom\GildedRose;


class Backstage
{

    /**
     * @param $item
     *
     * @return mixed
     */
    public static function updateQuality($item)
    {
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

        return $item;
    }

}