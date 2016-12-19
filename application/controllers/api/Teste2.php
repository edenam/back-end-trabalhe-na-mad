<?php

use Project\Core\MY_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

class Teste2 extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model("tbcategoria", "categorias");
        $this->load->model("tbproduto", "produtos");
    }

    public function getCategories_get(){

        $categorias = $this->categorias->getAll();

        $this->response($categorias);

    }

    public function getProdutos_get(){

        $produtos = $this->produtos->getAll();

        $this->response($produtos);

    }

    public function saveProduto_post(){

        try {

            $campos = $this->post();

            $this->produtos->saveProduto($campos);

            $this->response(array("success" => "ok"));

        }catch(Exception $e){

            $this->response(array("error" => $e->getMessage()), 400);

        }

    }

}