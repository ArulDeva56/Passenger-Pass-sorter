<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\JsonbyService\DataByService;
use App\Sorter\Sorter;

class HomeController extends DataController
{
    #[Route('/', name: 'app_home')]  // set url 
    public function index(): Response
    {

        $infoData = json_encode($this->getInfoData()); // get data from Data Controller 

        $dataSync = new DataByService(); // set information by service

        $info  = $dataSync->dataSync($infoData); // get structured data by array 

        $sortData  = new Sorter($info); // sort array by order 

        return $this->render('home/index.html.twig', [
            'infos' => $this->getInfoData(),
            'listByOrderInfos'=>$sortData->getOrderedDatas()
        ]);  // return html with data
    }
}
