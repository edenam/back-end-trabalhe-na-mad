<?php

use Project\Core\MY_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

class Teste2 extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model("tbcategoria", "categoria");
    }

    public function getCategories_get(){

        $categorias = $this->categoria->getAll();

        $this->response($categorias);

    }

}