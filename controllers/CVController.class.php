<?php

class CVController
{
    public function display()
    {
        $template = "cv.phtml";
        require 'views/layout.phtml';
    }
}