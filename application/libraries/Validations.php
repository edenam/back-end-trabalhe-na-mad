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
        $this->validateDataFabricacao($dados['dt_fabricacao']);
        $this->validateTamanho($dados['vl_tamanho']);
        $this->validateLargura($dados['vl_largura']);

    }

    public function validateNomeProduto($nomeProduto){

        if(!is_array($nomeProduto)){
            $nomeProduto['nm_produto'] = $nomeProduto;
        }

        $rules = array(
            array(
                'field' => 'nm_produto',
                'label' => 'Nome do Produto',
                'rules' => 'required|trim|xss_clean'
            ),
        );

        $this->validate($rules, $nomeProduto);
    }

    public function validateTamanho($tamanho){

        if(!is_array($tamanho)){
            $dataFabricacao['vl_tamanho'] = $tamanho;
        }

        $rules = array(
            array(
                'field' => 'vl_tamanho',
                'rules' => 'required|trim|decimal|numeric|xss_clean'
            ),
        );

        $this->validate($rules, $tamanho);
    }

    public function validateLargura($largura){

        if(!is_array($largura)){
            $dataFabricacao['vl_tamanho'] = $largura;
        }

        $rules = array(
            array(
                'field' => 'vl_largura',
                'rules' => 'required|trim|decimal|numeric|xss_clean'
            ),
        );

        $this->validate($rules, $largura);
    }

    public function validateDataFabricacao($dataFabricacao){

        if(!is_array($dataFabricacao)){
            $dataFabricacao['dt_fabricacao'] = $dataFabricacao;
        }

        $rules = array(
            array(
                'field' => 'dt_fabricacao',
                'rules' => 'required|trim|exact_length[10]|callback_validate_date|xss_clean'
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