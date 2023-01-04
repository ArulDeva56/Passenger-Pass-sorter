<?php

namespace App\Sorter;

use App\Entity\Sorter\IDataSort;


class DataSort implements IDataSort
{
    
    public function sort(array $datas): array
    {

        $items  = $datas;
        $result = [array_pop($datas)];

        while (0 < $itemsCount = count($items)) {
            foreach ($items as $key => $item) {
                if (reset($result)->hasFromPlace($item)) {
                    array_unshift($result, $item);

                    unset($items[$key]);
                } elseif (end($result)->hasToPlace($item)) {
                    $result[] = $item;

                    unset($items[$key]);
                }

                if (1 === count($items)) {
                    unset($items[$key]);
                }
            }

        }

        return $result;
    }
}