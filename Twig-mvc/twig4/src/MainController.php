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
            'pageTitle' => 'Home'
        ];

        $html = $this->twig->render('home.html.twig', $argsArray);

        print $html;
    }

    public function jokesAction()
    {
        $argsArray = [
            'pageTitle' => 'Jokes'
        ];

        $html = $this->twig->render('jokes.html.twig', $argsArray);

        print $html;
    }

    public function contactusAction(){
        $argsArray = [
            'pageTitle' => 'Contact Us'
        ];

        $html = $this->twig->render('contactus.html.twig', $argsArray);

        print $html;
    }
}