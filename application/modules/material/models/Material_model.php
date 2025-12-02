<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Material_model extends CI_Model
{

    protected $table = 'materials';

    /**
     * Get semua materials dengan DataTable processing
     * Compatible dengan ODBC SQL Server
     */
    public function getMaterials()
    {
        $start = $this->input->post('start') ?: 0;
        $length = $this->input->post('length') != -1 ? $this->input->post('length') : 10;
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');
        $order = $this->input->post('order');

        // Default order jika tidak ada
        $order_column_idx = isset($order[0]['column']) ? intval($order[0]['column']) : 0;
        $order_dir = isset($order[0]['dir']) ? strtoupper($order[0]['dir']) : 'ASC';

        $field = array(
            0 => 'id',
            1 => 'kode_material',
            2 => 'nama_material',
            3 => 'kategori',
            4 => 'satuan',
            5 => 'stok',
            6 => 'harga'
        );

        $order_column = isset($field[$order_column_idx]) ? $field[$order_column_idx] : 'id';
        $order_dir = ($order_dir === 'DESC') ? 'DESC' : 'ASC';

        // Build WHERE clause untuk search
        $where = '';
        $search_value = isset($search['value']) ? trim($search['value']) : '';

        if (!empty($search_value)) {
            $search_escaped = str_replace("'", "''", $search_value); // Escape single quote
            $where = " WHERE (
                kode_material LIKE '%{$search_escaped}%' OR 
                nama_material LIKE '%{$search_escaped}%' OR 
                kategori LIKE '%{$search_escaped}%' OR 
                satuan LIKE '%{$search_escaped}%'
            )";
        }

        // Query 1: Count total records (tanpa filter)
        $sql_total = "SELECT COUNT(*) as total FROM {$this->table}";
        $query_total = $this->db->query($sql_total);
        $records_total = $query_total->row()->total;

        // Query 2: Count filtered records
        $sql_filtered = "SELECT COUNT(*) as total FROM {$this->table} {$where}";
        $query_filtered = $this->db->query($sql_filtered);
        $records_filtered = $query_filtered->row()->total;

        // Query 3: Get data dengan pagination
        $sql_data = "
            SELECT * 
            FROM {$this->table} 
            {$where}
            ORDER BY {$order_column} {$order_dir}
            OFFSET {$start} ROWS 
            FETCH NEXT {$length} ROWS ONLY
        ";

        $query_data = $this->db->query($sql_data);
        $rows_data = $query_data->result();

        $rows = array();
        $i = ($start + 1);

        foreach ($rows_data as $row) {
            $sub_array = new stdClass();
            $sub_array->number = $i;
            $sub_array->id = $row->id;
            $sub_array->kode_material = $row->kode_material;
            $sub_array->nama_material = $row->nama_material;
            $sub_array->kategori = $row->kategori;
            $sub_array->satuan = $row->satuan;
            $sub_array->stok = $row->stok;
            $sub_array->harga = $row->harga;
            $sub_array->actions = '
                <button class="btn btn-xs btn-primary" data-action="edit" data-id="' . $row->id . '" style="padding: 3px 7px; font-size: 11px;">
                    <i class="bi bi-pencil" style="font-size: 11px;"></i>
                </button>
                <button class="btn btn-xs btn-danger" data-action="delete" data-id="' . $row->id . '" style="padding: 3px 7px; font-size: 11px;">
                    <i class="bi bi-trash" style="font-size: 11px;"></i>
                </button>
            ';

            $rows[] = $sub_array;
            $i++;
        }

        return array(
            'draw' => intval($draw),
            'recordsTotal' => intval($records_total),
            'recordsFiltered' => intval($records_filtered),
            'data' => $rows,
        );
    }

    /**
     * Get material by ID
     */
    public function get_material_by_id($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query->row();
    }

    /**
     * Insert material baru
     */
    public function insert_material($data)
    {
        $sql = "INSERT INTO {$this->table} (kode_material, nama_material, kategori, satuan, stok, harga) 
                VALUES (?, ?, ?, ?, ?, ?)";

        return $this->db->query($sql, array(
            $data['kode_material'],
            $data['nama_material'],
            $data['kategori'],
            $data['satuan'],
            $data['stok'],
            $data['harga']
        ));
    }

    /**
     * Update material
     */
    public function update_material($id, $data)
    {
        $sql = "UPDATE {$this->table} 
                SET kode_material = ?, 
                    nama_material = ?, 
                    kategori = ?, 
                    satuan = ?, 
                    stok = ?, 
                    harga = ?
                WHERE id = ?";

        return $this->db->query($sql, array(
            $data['kode_material'],
            $data['nama_material'],
            $data['kategori'],
            $data['satuan'],
            $data['stok'],
            $data['harga'],
            $id
        ));
    }

    /**
     * Delete material
     */
    public function delete_material($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        return $this->db->query($sql, array($id));
    }
}

/* End of file Material_model.php */