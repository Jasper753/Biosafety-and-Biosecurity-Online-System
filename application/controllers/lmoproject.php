<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lmoproject extends CI_Controller {

	public function index()
	{
		$this->load->template('lmoproject_view');
	}
}
