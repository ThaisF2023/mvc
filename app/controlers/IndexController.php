<?php

namespace App\controlers;

use Core\controller\Action;

class IndexController extends Action
{

    

    public function index()
    {
        $this->view->dados = array("Casa", "Apartemento", "Sobrado");
        $this->render("index", "layout1");

        
    }

    public function sobre_nos()
    {
        $this->view->dados = array("Apartemento", "Sobrado");
        $this->render("sobre_nos","layout2");

        
    }

    public function contato()
    {
        $this->view->dados = array("Casa", "Sobrado");
        $this->render("contato","layout");

        
    }

    public function compras()
    {
        $this->view->dados = array("Casa", "Apartemento");
        $this->render("compras","layout");

        
    }

    public function carro()
    {
        $this->view->dados = array("Cabana", "Apartemento", "Sobrado");
        $this->render("carro","layout");

        
    }

    public function modelo()
    {
        $this->view->dados = array("Casa", "Arte", "Sobrado");
        $this->render("modelo","layout");

        
    }

    public function menu()
    {
        $this->view->dados = array("Casa", "Apartemento", "Saude");
        $this->render("menu","layout");

        
    }

    public function funcionarios()
    {
        $this->view->dados = array("arduino", "Apartemento", "Sobrado");
        $this->render("funcionarios","layout");

        
    }

    
}

?>
