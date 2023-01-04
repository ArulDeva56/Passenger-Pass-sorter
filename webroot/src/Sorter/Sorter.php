<?php

namespace App\Sorter;

use App\Entity\Models\IData;
use App\Entity\Sorter\IDataSort;

class Sorter
{
    
    private $datas = [];


    public function __construct(array $datas, IDataSort $sort = null)
    {
        $sort = $sort ? : new DataSort();

        foreach ($datas as $data) {
           
            $this->setData($data);
        }

        $this->datas = $sort->sort($this->datas);
    }

  
    public function getOrderedDatas(): array
    {
        return $this->datas;
    }


    private function setData(IData $datas)
    {
        $this->datas[] = $datas;
       
    }
}