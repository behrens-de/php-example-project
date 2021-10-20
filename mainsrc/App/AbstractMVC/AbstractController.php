<?php

namespace App\App\AbstractMVC;

class AbstractController
{
    /**
     * Stellt die verbindung zwichen den Variablen des Models und der View her :)
     */
    public function pageload($dir, $view, $variablen)
    {
        extract($variablen); // https://www.php.net/manual/de/function.extract.php
        $rootPath = __DIR__ . '/../../';
        require_once $rootPath.$dir.$view;
    }
}
