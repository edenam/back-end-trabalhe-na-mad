<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validations {

    private $ci;
    private $form_validation;

    function __construct(){

        $this->ci = & get_instance();
        $this->ci->load->library('form_validation');
    }

    public function validateNomeProduto($nomeProduto){

        if(!is_array($nomeProduto)){
            $nomeProduto['nm_produto'] = $nomeProduto;
        }

        $rules = array(
            array(
                'field' => 'nm_produto',
                'rules' => 'required'
            ),
        );

        $this->validate($rules, $nomeProduto);
    }

    public function validateDataFabricacao($dataFabricacao){

        if(!is_array($dataFabricacao)){
            $dataFabricacao['dt_fabricacao'] = $dataFabricacao;
        }

        $rules = array(
            array(
                'field' => 'dt_fabricacao',
                'rules' => 'required|regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]'
            ),
        );

        $this->validate($rules, $dataFabricacao);
    }

    private function validate($rules, $fields){

        $this->ci->form_validation->set_rules($rules);
        $this->ci->form_validation->set_data($fields);

        if(! $this->ci->form_validation->run()){
            throw new Exception($this->ci->form_validation->error_array());
        }
    }



}