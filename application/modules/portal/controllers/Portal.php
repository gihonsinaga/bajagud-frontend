<?php
// filepath: d:\developments\php\baraguddevelopment\application\modules\portal\controllers\Portal.php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Portal Controller
 * 
 * @property CI_Session $session
 * @property CI_Input $input
 */
class Portal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_in(); // Check if user logged in
    }

    /**
     * Portal Index - Pilihan Menu Setelah Login
     */
    public function index()
    {
        // Static portal list - tidak pakai database
        $data['portals'] = $this->getPortalList();

        $data['title'] = "Portal Selection";
        $data['nama'] = $this->session->userdata('nama');
        $data['kode_vendor'] = $this->session->userdata('kode_vendor');
        $data['email'] = $this->session->userdata('email');

        // ✅ Load view langsung tanpa template default
        $this->load->view('portal/index', $data);
    }

    /**
     * Get Portal List - Hardcoded (tanpa database)
     *
     * @return array
     */
    private function getPortalList()
    {
        return array(
            array(
                'code' => 'PENGADAAN BARANG',
                'name' => 'Pengadaan Barang',
                'description' => 'Kelola data pengadaan barang dan inventaris',
                'icon' => 'bi bi-boxes',
                'url' => site_url('dashboard'),
                'color' => 'primary'
            ),
            array(
                'code' => 'PENGADAAN JASA',
                'name' => 'Pengadaan Jasa',
                'description' => 'Kelola data pengadaan jasa dan kontrak',
                'icon' => 'bi bi-box-seam',
                'url' => site_url('services/dashboard'),
                'color' => 'success'
            ),
        );
    }

    /**
     * Redirect to selected portal (optional)
     */
    public function redirect($portal_code)
    {
        $portals = $this->getPortalList();

        $selected_portal = null;
        foreach ($portals as $portal) {
            if ($portal['code'] === $portal_code) {
                $selected_portal = $portal;
                break;
            }
        }

        if ($selected_portal) {
            $this->session->set_userdata('active_portal', $portal_code);
            redirect($selected_portal['url']);
        } else {
            $this->session->set_flashdata('error', 'Portal tidak ditemukan');
            redirect('portal');
        }
    }
}

/* End of file Portal.php */