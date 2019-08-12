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
        $data['home']['slider'] = $this->Botanica_model->fetch_slider_details();
        $data['home']['product_service'] = $this->Botanica_model->fetch_product_service();
        $data['home']['why_chooseup'] = $this->Botanica_model->fetch_why_chooseup();
        $data['home']['our_process'] = $this->Botanica_model->fetch_our_process();
        $data['home']['turn_your_garden'] = $this->Botanica_model->fetch_turn_your_garden();
        $data['home']['fetch_last_detail'] = $this->Botanica_model->fetch_last_detail();
        $data['home']['fetch_home_detail'] = $this->Botanica_model->fetch_home_detail();
        $data['page']['pageno'] = 1;
        $data['page']['pageurl'] = 'home';
        $data['page']['footer'] = $this->Botanica_model->fetch_companydetails();
        $data['page']['socialmedia'] = $this->Botanica_model->fetch_socail_media();

        $this->load->view('include/template', $data);
    }

    public function about_us()
    {
        $data['page']['pageno'] = 2;
        $data['page']['pageurl'] = 'about_us';
        $data['page']['socialmedia'] = $this->Botanica_model->fetch_socail_media();
        $data['page']['footer'] = $this->Botanica_model->fetch_companydetails();
        $data['about_us']['content'] = $this->Botanica_model->fetch_abountus();
        $this->load->view('include/template', $data);
    }

    public function service()
    {
        $data['page']['masterID'] = ($this->uri->segment(2));
        $data['page']['pageno'] = 3;
        $data['page']['footer'] = $this->Botanica_model->fetch_companydetails();
        $data['page']['socialmedia'] = $this->Botanica_model->fetch_socail_media();
        $this->load->view('include/template', $data);
    }
}
