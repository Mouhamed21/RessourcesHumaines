<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OrganisationController extends Controller
{
    /**
     * @Route("/organisation", name="organisation")
     */
    public function OrganisationAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('organisation/organisation.html.twig', []);
    }
}
