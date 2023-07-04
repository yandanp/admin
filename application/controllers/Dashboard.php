<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('smarty_acl');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->logged_in();
        $this->smarty_acl->authorized();
    }

    /**
     * Load views from admin views path
     * @param $view
     * @param null $data
     */
    protected function admin_views($view, $data = null)
    {
        $this->load->view('admin/'.$view, $data);
    }

    protected function logged_in()
    {
        // var_dump($this->smarty_acl->authorized());

        if (!$this->smarty_acl->logged_in()) {
            return redirect('admin/login');
        }
    }

    /*
     * Index
     */
    public function index()
    {
        //print_r($this->session->userdata('login_admin_5dc3d3da95837cb55414978798a86fbee74dd54d'));
        // var_dump($this->smarty_acl->authorized());
        // $this->admin_views('index');
        // $this->load->view('welcome_message');
        
        $data['judul'] = "Dashboard";
        $this->template->load('app', 'admin/dashboard', $data);
    }
    
}
