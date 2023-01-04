<?php

namespace App\JsonbyService;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\DataSync\IDataSync;
use App\Entity\Models\IData;
use App\Entity\BusInfo;
use App\Entity\FlightInfo;
use App\Entity\Place;
use App\Entity\TrainInfo;

class DataByService implements IDataSync
{

    /*
     * @param string $data
     *
     * @return array
     */

    public function dataSync(string $data): array
    {
       
            $jsonData = json_decode($data, true);
          
        $infos = [];

        foreach ($jsonData as $info) {
            $infos[] = $this->createInfo($info);
        }

        return $infos;
    }

    private function createInfo(array $info): IData
    {
        $type = $info['type'];

        switch ($type) {
            case 'train':
                return new TrainInfo(
                    new Place($info['from']),
                    new Place($info['to']),
                    $info['seat'],
                    $info['number'],
                    $info['gate'],
                    $info['counter']
                );

            case 'bus':
                return new BusInfo(
                    new Place($info['from']),
                    new Place($info['to']),
                    $info['seat'],
                    $info['number'],
                    $info['gate'],
                    $info['counter']
                );
            case 'airplane':
                return new FlightInfo(
                    new Place($info['from']),
                    new Place($info['to']),
                    $info['seat'],
                    $info['number'],
                    $info['gate'],
                    $info['counter']
                );
            default:
                exit('No service click browser back button');
        }
    }


}