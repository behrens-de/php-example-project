<?php

namespace App\App;

class Router{

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function add($controller, $method){
        $container = $this->container->build($controller);
        $view = $method;
        $this->build($container, $view);
    }


    public function build($container, $view){
        $container->$view();

    }

}