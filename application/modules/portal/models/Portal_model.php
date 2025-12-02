<?php
// filepath: d:\developments\php\baraguddevelopment\application\modules\portal\models\Portal_model.php

defined('BASEPATH') or exit('No direct script access allowed');

class Portal_model extends CI_Model
{

    protected $table_portal = 'TB_S_MST_PORTAL';
    protected $table_access = 'TB_S_MST_PORTAL_ACCESS';

    /**
     * Get Available Portals untuk Vendor
     *
     * @param string $kode_vendor
     * @return array
     */
    public function getAvailablePortals($kode_vendor)
    {
        $sql = "SELECT 
                    p.portal_code,
                    p.portal_name,
                    p.portal_desc,
                    p.portal_icon,
                    p.portal_url,
                    p.portal_order
                FROM {$this->table_portal} p
                INNER JOIN {$this->table_access} pa 
                    ON p.portal_code = pa.portal_code
                WHERE pa.kode_vendor = ?
                    AND p.is_active = 1
                    AND pa.is_active = 1
                ORDER BY p.portal_order ASC";

        $query = $this->db->query($sql, array($kode_vendor));
        return $query->result();
    }

    /**
     * Check Access Vendor ke Portal
     *
     * @param string $kode_vendor
     * @param string $portal_code
     * @return boolean
     */
    public function checkAccess($kode_vendor, $portal_code)
    {
        $sql = "SELECT COUNT(*) as total 
                FROM {$this->table_access}
                WHERE kode_vendor = ? 
                    AND portal_code = ?
                    AND is_active = 1";

        $query = $this->db->query($sql, array($kode_vendor, $portal_code));
        $result = $query->row();

        return ($result->total > 0);
    }

    /**
     * Get All Portals (untuk admin)
     *
     * @return array
     */
    public function getAllPortals()
    {
        $sql = "SELECT * FROM {$this->table_portal} 
                WHERE is_active = 1 
                ORDER BY portal_order ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }
}

/* End of file Portal_model.php */