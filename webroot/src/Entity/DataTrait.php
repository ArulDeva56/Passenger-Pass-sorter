<?php

namespace App\Entity;
use App\Entity\Models\IData;

trait DataTrait
{

    private $fromPlace;

    private $toPlace;

    private $seat;

    public function getToPlace(): Place
    {
        return $this->toPlace;
    }

    public function getFromPlace(): Place
    {
        return $this->fromPlace;
    }

    public function getSeat(): string
    {
        return $this->seat;
    }

    public function hasFromPlace(IData $data): bool
    {
        return $this->fromPlace->getName() === $data->getToPlace()->getName();
    }

    public function hasToPlace(IData $data): bool
    {
        return $this->toPlace->getName() === $data->getFromPlace()->getName();
    }


}