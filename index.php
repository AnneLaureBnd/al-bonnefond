<?php

//connection
// session_start();

//autoload
spl_autoload_register(function($class)
{
    if(stristr($class, 'controller') !== FALSE)
    {
        require 'controllers/' . $class . '.class.php';
    }
    // else if (stristr($class, 'model') !== FALSE)
    // {
    //   require 'models/' . $class . '.class.php';  
    // }
    else
    {
        require 'File not found';
    }
});

//differents pages
if(isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case 'home':
            $controller = new HomeController();
            $controller->display();
            break;
        case 'career':
            $controller = new CareerController();
            $controller->display();
            break;
        case 'cv':
            $controller = new CVController();
            $controller->display();
            break;
        case 'projects':
            $controller = new ProjectsController();
            $controller->display();
            break;
        default:
            $controller = new HomeController();
            $controller->display();
            break;
    }
}
else
{
    $controller = new HomeController();
    $controller->display();
}