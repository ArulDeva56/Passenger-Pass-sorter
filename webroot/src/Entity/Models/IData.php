<?php

namespace App\Entity\Models;

use App\Entity\Place;

/*
 * Interface IData
 *
 * package App\Entity\Models
 */

interface IData extends IDataExtra
{
   
    public function getToPlace(): Place;
    public function getFromPlace(): Place;

    public function __toString(): string;
  
}