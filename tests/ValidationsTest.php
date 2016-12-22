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

    public function testValidaNomeProduto(){

        $nomeProdutoValido = array('nm_produto' => 'nome valido');
        $this->validations->validateNomeProduto($nomeProdutoValido);

        $this->assertTrue(count($this->validations->getErrorArray()) == 0);

    }

    public function testDataFabricacaoInvalidaSobeException(){

        $this->setExpectedException(Exception::class);

        $dataFabricacaoInvalida = array('dt_fabricacao' => '21/21/2021');
        $this->validations->validateDataFabricacao($dataFabricacaoInvalida);

        $this->assertArrayHasKey($this->validations->getErrorArray(), 'dt_fabricao');

    }

    public function testDataFabricacaoValida(){

        $dataFabricacaoValida = array('dt_fabricacao' => '21/12/2012');
        $this->validations->validateDataFabricacao($dataFabricacaoValida);

        $this->assertTrue(count($this->validations->getErrorArray()) == 0);

    }

    public function testTamanhoInvalidoSobeException(){

        $this->setExpectedException(Exception::class);

        $tamanhoInvalido = array('vl_tamanho' => '');
        $this->validations->validateTamanho($tamanhoInvalido);

        $this->assertArrayHasKey($this->validations->getErrorArray(), 'vl_tamanho');
    }

    public function testValidacaoTamanhoValido(){

        $tamanhoValido = array('vl_tamanho' => '132,12');
        $this->validations->validateTamanho($tamanhoValido);

        $this->assertTrue(count($this->validations->getErrorArray()) == 0);

    }
}