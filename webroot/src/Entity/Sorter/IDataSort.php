<?php

namespace App\Entity\Sorter;

use App\Entity\Models\IDataExtra;

interface IDataSort
{
     /*
     * @param IDataExtra[] $datas
     *
     * @return array
     */
    
    public function sort(array $datas): array;
}