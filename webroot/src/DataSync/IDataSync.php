<?php

namespace App\DataSync;

use Doctrine\ORM\Mapping as ORM;

interface IDataSync
{

    public function dataSync(string $data): array;
}