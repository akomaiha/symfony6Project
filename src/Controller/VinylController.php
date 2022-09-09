<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title : pb and james');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        return new Response('Genre: ' . $slug);
    }
}