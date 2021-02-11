<?php

class ProjectsController
{
    public function display()
    {
        $template = "projects.phtml";
        require 'views/layout.phtml';
    }
}