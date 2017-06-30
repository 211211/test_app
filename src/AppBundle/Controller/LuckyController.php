<?php
/**
 * Created by PhpStorm.
 * User: quannguyen
 * Date: 6/30/17
 * Time: 16:20
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return new Response(
          '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}