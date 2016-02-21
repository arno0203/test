<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{

    /**
     * @Route("/lucky/number/{count}")
     * @param $count
     * @return Response
     */
    public function numberAction($count)
    {
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numList = implode(', ', $numbers);

        $html = $this->container->get('templating')->render(
            'lucky/number.html.twig',
            array('luckyNumberList' => $numList)
        );

        return new Response($html);
    }

    /**
     * @Route("/api/lucky/number")
     * @return Response
     */
    public function apiNumberAction()
    {
        $data = array('lucky_numer' => rand(0, 100));

        return new JsonResponse($data);
    }
}
