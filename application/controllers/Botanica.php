<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Botanica extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Botanica_model');
    }

    public function index()
    {

    }

    public function home()
    {
        $data['slider'] = $this->Botanica_model->fetch_slider_details();
        $data['page']['pageno'] = 1;
        $this->load->view('include/template', $data);
    }

    public function about_us()
    {
        $data['page']['pageno'] = 2;
        $this->load->view('include/template', $data);
    }

    public function service()
    {
        $data['page']['masterID'] = ($this->uri->segment(2));
        $data['page']['pageno'] = 3;
        $this->load->view('include/template', $data);
    }
}
