<?php

use Project\Core\MY_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

class Teste2 extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model("tbcategoria", "categorias");
    }

    public function getCategories_get(){

        $categorias = $this->categorias->getAll();

        $this->response($categorias);

    }

}