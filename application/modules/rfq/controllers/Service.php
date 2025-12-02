<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Rfq_model', 'rfq');
        $this->load->library(['Crypto' . 'zip']);
    }

    public function rfq_services()
    {
        $data['title']      = "RFQ Service";
        $data['menu']       = "RFQ";
        $data['submenu']    = "RFQ Service";
        $data['content']    = "rfq_service";
        // $data['rfq_service']= $this->rfq->getRfqServiceData();
        $this->load->view('default_services', $data);
    }
}
