<?php
// filepath: d:\developments\php\baraguddevelopment\application\modules_jasa\dashboard\controllers\Dashboard.php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Dashboard Services Controller
 * 
 * @property Dashboard_model $dashboard
 * @property CI_Session $session
 */
class Dashboard extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Dashboard_model', 'dashboard');
    }

    /**
     * Index Function - Dashboard Services
     */
    public function index()
    {
        $data['title']      = "Dashboard Pengadaan Jasa";
        $data['menu']       = "Dashboard";
        $data['submenu']    = "Pengadaan Jasa";
        $data['content']    = "dashboard/index";

        $this->load->view('default_services', $data);
    }

    /**
     * Get Dashboard Data (AJAX)
     */
    public function get_dashboard_data()
    {
        $data = $this->dashboard->getDashboardData();

        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    /**
     * Get Recent Services (AJAX)
     */
    public function get_recent_services()
    {
        $data = $this->dashboard->getRecentServices();

        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    /**
     * Get Pending Invoices (AJAX)
     */
    public function get_pending_invoices()
    {
        $data = $this->dashboard->getPendingInvoicesList();

        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    /**
     * Get Chart Data (AJAX)
     */
    public function get_chart_data()
    {
        $data = array(
            'services_by_category' => $this->dashboard->getServicesByCategory(),
            'monthly_revenue' => $this->dashboard->getMonthlyRevenue(),
        );

        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}

/* End of file Dashboard.php */