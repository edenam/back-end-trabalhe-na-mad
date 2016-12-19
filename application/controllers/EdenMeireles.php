<?php

use Project\Core\MY_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

class EdenMeireles extends MY_Controller {

	public function teste1_get()
	{
		$data = array(
			'content' => $this->load->view('teste1/index', '', true)
		);

		$this->parser->parse('master_page', $data);
	}

	public function teste2_get()
	{
		$data = array(
			'content' => $this->load->view('teste2/index', '', true)
		);

		$this->parser->parse('master_page', $data);
	}
}
