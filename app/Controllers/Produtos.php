<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produtos extends ResourceController
{
    private $produtoModel;

    public function __construct(){
        $this->produtoModel = new \App\Models\ProdutosModel();
    }

    //mostrar todos os produtos
    public function list(){
        $data = $this->produtoModel->findAll();
        return $this->response->setJSON($data);
    }

    public function produto($id){
        $data = $this->produtoModel->getProduto($id);
        return $this->response->setJSON($data);
    }
}