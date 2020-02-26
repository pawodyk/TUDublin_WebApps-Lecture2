<?php
namespace TUDublin;

class MainController
{

    private $twig;

    public function __construct(\Twig\Environment $twig)
    {
        $this->twig = $twig;
    }

    public function indexAction()
    {
        $argsArray = [
            'pageTitle' => 'home'
        ];

        $html = $this->twig->render('home.html.twig', $argsArray);

        print $html;
    }

    public function jokesAction()
    {
        $argsArray = [
            'pageTitle' => 'jokes'
        ];

        $html = $this->twig->render('jokes.html.twig', $argsArray);

        print $html;
    }
}