<?php
class MainController
{
    public function indexAction()
    {
        $pageTitle = 'home';
        include __DIR__ . '/../templates/home.php';
    }

    public function jokesAction()
    {
        $pageTitle = 'jokes';
        include __DIR__ . '/../templates/jokes.php';
    }
}