<?php


class Tbcategoria extends MY_Model
{
    protected $tbName = "tb_categoria";

    private $id;
    private $nome;

    public function __construct()
    {
        parent::__construct();
    }

}