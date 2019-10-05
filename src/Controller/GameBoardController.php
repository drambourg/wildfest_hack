<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GameBoardController extends AbstractController
{
    /**
     * @Route("/game/board", name="game_board")
     */
    public function index()
    {
        return $this->render('game_board/index.html.twig', [
            'controller_name' => 'GameBoardController',
        ]);
    }
}
