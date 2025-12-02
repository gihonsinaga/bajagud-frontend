<?php

class Rfq extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        logged_in();
        // $this->load->model('Service_model', 'service');
    }

    public function index(){
        $data['title']      = "RFQ Dashboard";
        $data['menu']       = "RFQ";
        $data['submenu']    = "Dashboard";
        $data['content']    = "rfq/rfq_dashboard";
        $this->load->view('default_services', $data);
    }

    public function detail()
    {
        $data['title']      = "Detail RFQ";
        $data['menu']       = "RFQ";
        $data['submenu']    = "Detail RFQ";
        $data['content']    = "rfq/detail_rfq";
        $this->load->view('default_services', $data);
    }
    
    public function form()
    {
        $data['title']      = "Form RFQ";
        $data['menu']       = "RFQ";
        $data['submenu']    = "Form RFQ";
        $data['content']    = "rfq/form_rfq";
        $this->load->view('default_services', $data);
    }

 
}