<?php

declare(strict_types=1);

namespace App\Controller;

use App\Message\Command\CommandMessage;
use App\MessageBus\CommandBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    use CommandBus;

    public function index(): Response
    {
        $this->dispatch(new CommandMessage(155));

        return $this->render('homepage.html.twig', [
            'count' => 15,
        ]);
    }
}