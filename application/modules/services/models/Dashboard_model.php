<?php
// filepath: d:\developments\php\baraguddevelopment\application\modules_jasa\dashboard\models\Dashboard_model.php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

    /**
     * Get Dashboard Data untuk Services
     * 
     * NOTE: Ini masih dummy data untuk tampilan
     * Nanti tinggal ganti dengan query database real
     *
     * @return array
     */
    public function getDashboardData()
    {
        // ✅ DUMMY DATA - Untuk tampilan dulu
        $data = array(
            'total_services' => 125,
            'active_contracts' => 48,
            'pending_invoices' => 23,
            'completed_projects' => 89,

            // Additional stats (optional)
            'total_revenue' => 1250000000,  // Rp 1.25 M
            'pending_payments' => 350000000, // Rp 350 juta
            'active_vendors' => 15,
            'this_month_orders' => 12,
        );

        return $data;
    }

    /**
     * Get Recent Services (Dummy)
     *
     * @return array
     */
    public function getRecentServices()
    {
        // ✅ DUMMY DATA
        return array(
            array(
                'id' => 1,
                'service_name' => 'Jasa Konsultasi IT',
                'vendor' => 'PT Tech Solution',
                'status' => 'active',
                'start_date' => '2025-01-15',
                'end_date' => '2025-12-31',
                'value' => 150000000
            ),
            array(
                'id' => 2,
                'service_name' => 'Maintenance Server',
                'vendor' => 'PT Data Center',
                'status' => 'active',
                'start_date' => '2025-02-01',
                'end_date' => '2025-12-31',
                'value' => 85000000
            ),
            array(
                'id' => 3,
                'service_name' => 'Training Karyawan',
                'vendor' => 'PT Edu Training',
                'status' => 'completed',
                'start_date' => '2025-01-10',
                'end_date' => '2025-01-20',
                'value' => 25000000
            ),
            array(
                'id' => 4,
                'service_name' => 'Security Audit',
                'vendor' => 'PT Cyber Security',
                'status' => 'pending',
                'start_date' => '2025-03-01',
                'end_date' => '2025-03-31',
                'value' => 45000000
            ),
            array(
                'id' => 5,
                'service_name' => 'Cloud Storage Service',
                'vendor' => 'PT Cloud Provider',
                'status' => 'active',
                'start_date' => '2025-01-01',
                'end_date' => '2025-12-31',
                'value' => 120000000
            ),
        );
    }

    /**
     * Get Pending Invoices (Dummy)
     *
     * @return array
     */
    public function getPendingInvoicesList()
    {
        // ✅ DUMMY DATA
        return array(
            array(
                'invoice_no' => 'INV/2025/001',
                'vendor' => 'PT Tech Solution',
                'service' => 'Jasa Konsultasi IT',
                'amount' => 15000000,
                'due_date' => '2025-02-28',
                'status' => 'pending'
            ),
            array(
                'invoice_no' => 'INV/2025/002',
                'vendor' => 'PT Data Center',
                'service' => 'Maintenance Server',
                'amount' => 8500000,
                'due_date' => '2025-03-05',
                'status' => 'pending'
            ),
            array(
                'invoice_no' => 'INV/2025/003',
                'vendor' => 'PT Cloud Provider',
                'service' => 'Cloud Storage',
                'amount' => 12000000,
                'due_date' => '2025-03-10',
                'status' => 'overdue'
            ),
        );
    }

    /**
     * Get Chart Data - Service by Category (Dummy)
     *
     * @return array
     */
    public function getServicesByCategory()
    {
        // ✅ DUMMY DATA untuk Chart
        return array(
            array('category' => 'IT Services', 'total' => 45),
            array('category' => 'Consulting', 'total' => 32),
            array('category' => 'Training', 'total' => 18),
            array('category' => 'Maintenance', 'total' => 25),
            array('category' => 'Others', 'total' => 5),
        );
    }

    /**
     * Get Monthly Revenue (Dummy)
     *
     * @return array
     */
    public function getMonthlyRevenue()
    {
        // ✅ DUMMY DATA untuk Chart
        return array(
            array('month' => 'Jan', 'revenue' => 150000000),
            array('month' => 'Feb', 'revenue' => 180000000),
            array('month' => 'Mar', 'revenue' => 120000000),
            array('month' => 'Apr', 'revenue' => 200000000),
            array('month' => 'May', 'revenue' => 175000000),
            array('month' => 'Jun', 'revenue' => 190000000),
        );
    }
}

/* End of file Dashboard_model.php */