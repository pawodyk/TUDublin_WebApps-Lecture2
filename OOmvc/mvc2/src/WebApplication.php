<?php

class WebApplication
{
    public function run()
    {
        //print 'Web app is running!';

        $this->indexAction();
    }

    private function indexAction()
    {
        $pageTitle = 'home';
        include __DIR__ . '/../templates/home.php';
        
    }
}
