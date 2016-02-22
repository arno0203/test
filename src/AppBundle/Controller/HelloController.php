<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController extends Controller
{
    /**
     * @Route("/hello/{firstName}/{lastName}", name="hello")
     * @param $firstName
     * @return Response
     */
    public function indexAction($firstName)
    {
        return new Response('<html><body>Hello '.ucfirst($firstName).'</body></html>');
    }
}
