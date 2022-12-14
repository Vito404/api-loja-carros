<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produtos extends ResourceController
{
    private $produtosModel;

    public function __construct(){
        $this->produtosModel = new \App\Models\ProdutosModel();
    }

    public function listar()
    {
        $data = $this->produtosModel->findALL();
        return $this->response->setJson($data);
    }

    public function produto($id)
    {
        $data = $this->produtosModel->getProduto($id);
        return $this->response->setJson($data);
    }
    public function produtos($limit){
        $data = $this->produtosModel->getProdutos($limit);
        return $this->response->setJson($data);
    }
    public function gravarProduto(){
        $this->produtosModel->save([
            'descricao' => $this->request->getPost('descricao'),
            'valor' => $this->request->getPost('valor')
        ]);
    }
    public function deletar($id){
        $this->produtosModel->delete($id);
    }
    public function atualizar($id){
        $data = $this->request->getJSON();
        $this->produtosModel->update($id, $data);
    }
}