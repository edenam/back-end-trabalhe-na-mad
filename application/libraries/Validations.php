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
                'label' => 'Nome do Produto',
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
                $ci_instance->form_validation->set_message('validate_date', 'The {field} field must contain a valid date.');
                return false;
            }
        }
        else
        {
            $ci_instance->form_validation->set_message('validate_date', 'The {field} field must contain a valid date.');
            return false;
        }

        return true;
    }

}