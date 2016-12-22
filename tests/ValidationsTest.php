<?php

require_once APPPATH.'libraries/Validations.php';

class ValidationsTest extends PHPUnit_Framework_TestCase
{
    private $CI;
    private $validations;
    
    
    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->library('form_validation');

        $this->validations = new Validations();
    }

    public function testNomeProdutoInvalidoSobeException(){

        $this->setExpectedException(Exception::class);

        $nomeProdutoInvalido = array('nm_produto' => '');
        $this->validations->validateNomeProduto($nomeProdutoInvalido);

        $this->assertArrayHasKey($this->validations->getErrorArray(), 'nm_produto');

    }

    public function testDataFabricacaoInvalidaSobeException(){

        $this->setExpectedException(Exception::class);

        $dataFabricacaoInvalida = array('dt_fabricacao' => '21/21/2021');
        $this->validations->validateDataFabricacao($dataFabricacaoInvalida);

        $this->assertArrayHasKey($this->validations->getErrorArray(), 'dt_fabricao');

    }

    public function testTamanhoInvalidoSobeException(){

        $this->setExpectedException(Exception::class);

        $tamanhoInvalido = array('vl_tamanho' => '');
        $this->validations->validateTamanho($tamanhoInvalido);

        $this->assertArrayHasKey($this->validations->getErrorArray(), 'vl_tamanho');
    }
}