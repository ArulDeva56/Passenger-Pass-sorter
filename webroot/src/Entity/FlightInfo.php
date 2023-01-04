<?php

namespace App\Entity;

use App\Entity\Models;
use App\Entity\Models\IData;
use Doctrine\ORM\Mapping as ORM;

class FlightInfo  implements IData
{
    use DataTrait;
    private $number;
    private $gate;
    private $counter;

     /*
     * FlightInfo constructor.
     * @param Place       $fromPlace
     * @param Place       $toPlace
     * @param string      $number
     * @param string      $gate
     * @param string      $seat
     * @param string|null $counter
     */

    public function __construct(Place $fromPlace, Place $toPlace, string $number, string $gate, string $seat, string $counter = null)
    {
        $this->fromPlace = $fromPlace;
        $this->toPlace   = $toPlace;
        $this->number  = $number;
        $this->gate      = $gate;
        $this->seat      = $seat;
        $this->counter   = $counter;
    }

    public function __toString(): string
    {
        $counterInfo = 'Baggage will we automatically transferred from your last leg.';
        if (null !== $this->counter) {
            $counterInfo = sprintf('Baggage drop at ticket counter  %s.', $this->counter);
        }

        return sprintf(
            'From %s, take %s to %s. Gate %s, seat %s. %s',
            $this->fromPlace,
            $this->gate,
            $this->toPlace,
            $this->seat,
            $this->number,
            $counterInfo
        );
    }
   

}