<?php

namespace App\Entity;

use App\Entity\Models;
use App\Entity\Models\IData;
use App\Entity;

use Doctrine\ORM\Mapping as ORM;

class TrainInfo implements IData
{
    use DataTrait;

    private $train;

     /*
     * TrainInfo constructor.
     * @param Place  $fromPlace
     * @param Place  $toPlace
     * @param string $seat
     * @param string $train
     */

    public function __construct(Place $fromPlace, Place $toPlace, string $seat, string $train)
    {
        $this->fromPlace = $fromPlace;
        $this->toPlace   = $toPlace;
        $this->seat      = $seat;
        $this->train     = $train;
    }
    

    public function __toString(): string
    {
        return sprintf('Take train %s from %s to %s. Sit in seat  %s', $this->train, $this->fromPlace, $this->toPlace, $this->seat);
    }

}