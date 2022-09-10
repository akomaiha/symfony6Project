<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class VinylController extends AbstractController
{
    #[Route('/', name : 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'American Idiot' , 'artist' => 'Green Day'],
            ['song' => 'Believe' , 'artist' => 'Cher'],
            ['song' => 'Ace of Spades' , 'artist' => 'Motorhead'],
            ['song' => 'Transgender Dysphoria Blues' , 'artist' => 'Against Me'],
            ['song' => 'In It For The Money' , 'artist' => 'Supergrass'],
            ['song' => 'Wide Open Spaces' , 'artist' => 'Dixie Chicks'],
        ];
        return $this->render('vinyl/homepage.html.twig' , ['tracks' => $tracks]);
    }

    #[Route('/browse/{slug}', name : 'app_browse')]
    public function browse(string $slug = null): Response
    {
        $genre = $slug ? u(str_replace('-' ,' ', $slug)) : null;
        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre
        ]);
    }
}