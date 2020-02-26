<?php
namespace TUDublin;

class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';
    private $mainController;

    public function __construct()
    {
        $twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(self::PATH_TO_TEMPLATES));
        $this->mainController = new MainController($twig);
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch ($action) {
            case 'jokes':
                $this->mainController->jokesAction();
                break;
            case 'contactus':
                $this->mainController->contactusAction();
                break;
            case 'index':
            default:
                $this->mainController->indexAction();
                break;
        }
    }
}
