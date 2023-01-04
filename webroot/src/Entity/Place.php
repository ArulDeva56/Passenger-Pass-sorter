<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Place
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }
    public function getName(): string
    {
        return $this->name;
    }


}