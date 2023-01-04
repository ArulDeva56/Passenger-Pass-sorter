<?php

namespace App\Entity\Models;

interface IDataExtra
{

    /*
     * @param IData $data
     *
     * @return bool
     */

    public function hasFromPlace(IData $data): bool;

    public function hasToPlace(IData $data): bool;

}