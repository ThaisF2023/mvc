<?php

namespace App;

use Core\init\Bootstrap;

class Route extends Bootstrap
{


     protected function initRoutes()
    {

        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'

        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'IndexController',
            'action' => 'sobre_nos'
        );

        $routes['contato'] = array(
            'route' => '/contato',
            'controller' => 'IndexController',
            'action' => 'contato'
        );

        $routes['compras'] = array(
            'route' => '/compras',
            'controller' => 'IndexController',
            'action' => 'compras'
        );

        $routes['carro'] = array(
            'route' => '/carro',
            'controller' => 'IndexController',
            'action' => 'carro'
        );

        $routes['modelo'] = array(
            'route' => '/modelo',
            'controller' => 'IndexController',
            'action' => 'modelo'
        );

        $routes['menu'] = array(
            'route' => '/menu',
            'controller' => 'IndexController',
            'action' => 'menu'
        );

        $routes['funcionarios'] = array(
            'route' => '/funcionarios',
            'controller' => 'IndexController',
            'action' => 'funcionarios'
        );

        $routes['produtos'] = array(
            'route' => '/produtos',
            'controller' => 'ProdutoController',
            'action' => 'index'
        );

        $this->setRoutes($routes);
    }
}
