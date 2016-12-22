<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validations {

    private $ci;
    private $form_validation;

    function __construct(){

        $this->ci = & get_instance();
        $this->ci->load->library('form_validation');
    }

    public function validaNovoProduto($dados){

        $this->validateNomeProduto($dados['nm_produto']);
        $this->validateTamanho($dados['vl_tamanho']);
        $this->validateLargura($dados['vl_largura']);

    }

    public function validateNomeProduto($nomeProduto){

        if(!is_array($nomeProduto)){
            $temp = $nomeProduto;
            unset($nomeProduto);
            $nomeProduto['nm_produto'] = $temp;
        }

        $rules = array(
            array(
                'field' => 'nm_produto',
                'label' => 'Nome do Produto',
                'rules' => 'required'
            ),
        );

        $this->validate($rules, $nomeProduto);
    }

    public function validateTamanho($tamanho){

        if(!is_array($tamanho)){
            $temp = $tamanho;
            unset($tamanho);
            $tamanho['vl_tamanho'] = $temp;
        }

        $rules = array(
            array(
                'field' => 'vl_tamanho',
                'label' => 'Tamanho',
                'rules' => 'required|decimal'
            ),
        );

        $this->validate($rules, $tamanho);
    }

    public function validateLargura($largura){

        if(!is_array($largura)){
            $temp = $largura;
            unset($largura);
            $largura['vl_largura'] = $temp;
        }

        $rules = array(
            array(
                'field' => 'vl_largura',
                'label' => 'Largura',
                'rules' => 'required|decimal'
            ),
        );

        $this->validate($rules, $largura);
    }

    public function validateDataFabricacao($dataFabricacao){

        if(!is_array($dataFabricacao)){
            $temp = $dataFabricacao;
            unset($dataFabricacao);
            $dataFabricacao['dt_fabricacao'] = $temp;
        }

        $rules = array(
            array(
                'field' => 'dt_fabricacao',
                'label' => 'Data de Fabricação',
                'rules' => 'callback_validate_date'
            ),
        );

        $this->validate($rules, $dataFabricacao);
    }

    private function validate($rules, $fields){

        $this->ci->form_validation->set_rules($rules);
        $this->ci->form_validation->set_data($fields);

        if(! $this->ci->form_validation->run()){
            throw new Exception();
        }
    }

    public function getErrorArray(){
        return $this->ci->form_validation->error_array();
    }


    public function validate_date($date)
    {
        $ci_instance = & get_instance();

        if (preg_match("^\d{2}/\d{2}/\d{4}^", $date))
        {
            $date_array = explode('/', $date);

            if (! checkdate($date_array[1], $date_array[0], $date_array[2]))
            {
                return false;
            }
        }
        else
        {
            return false;
        }

        return true;
    }

}