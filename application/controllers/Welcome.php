<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('smarty_acl');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    protected function logged_in()
    {
        if (!$this->smarty_acl->logged_in()) {
            return redirect('admin');
        }
    }

	public function index()
	{
		$this->load->view('auth/login');		

	}

    public function unauthorized()
    {
        echo 'UNAUTHORIZED ACCESS';
    }

	
}
