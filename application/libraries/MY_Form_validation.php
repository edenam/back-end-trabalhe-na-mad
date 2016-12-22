<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Decimal number
     *
     * @access  public
     * @param   string
     * @return  bool
     */
    function decimal($str)
    {
        return (bool) preg_match('/^[\-+]?[0-9]+[\.,][0-9]+$/', $str);
    }
}

// END Form Validation Extension Class

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */