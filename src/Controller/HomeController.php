<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index(): Response
    {
        return new Response(
            '<html><body>Home page</body></html>'
        );
    }

    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}