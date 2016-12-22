<?php

class SampleTest extends PHPUnit_Framework_TestCase
{

    private $CI;
    public function setUp()
    {
        $this->CI = &get_instance();

        $this->load->library("validations");
    }

    public function deveFalharValidacaoNomeProduto()
    {

        $nomeInvalido = array("nm_produto" => "");
        $this->validations->validaNovoProduto($nomeInvalido);

    }
}