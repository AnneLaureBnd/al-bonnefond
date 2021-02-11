<?php

class HomeController
{
    public function display()
    {
        $template = "index.phtml";
        require 'views/layout.phtml';
    }
}