<?php
namespace App\controlers;

use Core\controller\Produto;

class ProdutoController extends Produto{
    
    public function index()
    {
        $this->view->dados = array("Café", "Bombom", "Abacaxi");
        $this->render("index");

        
    }
}



?>