<?php

namespace Core\controller;

use stdClass;

abstract class Produto{

    protected $view;

    public function __construct()
    {
        $this->view = new stdClass;
    }

    protected function render ($view) {

        $classeAtual=  get_class($this);
        $classeAtual= str_replace('App\\controlers\\','',$classeAtual);

        $classeAtual = strtolower( str_replace('Controller','',$classeAtual));
        require_once('../app/view/'.$classeAtual.'/'.$view.'.phtml');
    }

    

}


?>