<?php

namespace App\Entity;

use App\Entity\Models;
use App\Entity\Models\IData;
use Doctrine\ORM\Mapping as ORM;

class BusInfo implements IData
{
    use DataTrait;

     /*
     * BusInfo constructor.

     * @param Place       $fromPlace
     * @param Place       $toPlace
     * @param string|null $seat
     */

    public function __construct(Place $fromPlace, Place $toPlace, string $seat = null)
    {
         $this->fromPlace = $fromPlace;
         $this->toPlace   = $toPlace;
         $this->seat      = $seat;
    }

    public function __toString(): string
    {
       $seatInfo = 'No seat assignment.';

      if (null !== $this->seat) {
      $seatInfo = sprintf('Seat %s', $this->seat);
       }

      return sprintf('Take the airport bus from %s to %s. %s', $this->fromPlace, $this->toPlace, $seatInfo);
    }

}