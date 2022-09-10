<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/v1/{id<\d+>}', methods: ['GET'])]
    public function getSong(int $id, LoggerInterface $logger): Response
    {
        $logger->info('this is a api call for endpoint getSong for the song {song}', [
            'song' => $id
        ]);
        return $this->json([
            'id' => $id,
            'song' => 'Dance Monkey'
        ]);
    }

}