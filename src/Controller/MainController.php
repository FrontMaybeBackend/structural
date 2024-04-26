<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('')]
    public function homePage(): Response
    {
        return new Response('<strong> madafaka </strong>');
    }
}
