<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Material extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Material_model', 'material');
        $this->load->library(['Crypto', 'zip']);
    }

    /**
     * List semua materials
     */
    public function mm_list()
    {
        if ($this->input->is_ajax_request()) {
            try {
                $rows = $this->material->getMaterials();
                header('Content-Type: application/json');
                echo json_encode($rows);
            } catch (Exception $e) {
                log_message('error', 'Material Error: ' . $e->getMessage());
                header('Content-Type: application/json');
                echo json_encode(array(
                    'draw' => 0,
                    'recordsTotal' => 0,
                    'recordsFiltered' => 0,
                    'data' => array(),
                    'error' => $e->getMessage()
                ));
            }
            exit;
        }

        $data['title']      = "Material Management";
        $data['menu']       = "Material";
        $data['submenu']    = "List Materials";
        $data['content']    = "material/list";

        $this->load->view('default', $data);
    }

    /**
     * Tambah material baru
     */
    public function add()
    {
        // Validate input
        if (!$this->input->post('kode_material') || !$this->input->post('nama_material')) {
            echo json_encode(array(
                'status' => 'error',
                'message' => 'Data tidak lengkap'
            ));
            return;
        }

        $data = array(
            'kode_material' => $this->input->post('kode_material'),
            'nama_material' => $this->input->post('nama_material'),
            'kategori'      => $this->input->post('kategori'),
            'satuan'        => $this->input->post('satuan'),
            'stok'          => $this->input->post('stok') ?: 0,
            'harga'         => $this->input->post('harga') ?: 0
        );

        if ($this->material->insert_material($data)) {
            $response = array(
                'status' => 'success',
                'message' => 'Material berhasil ditambahkan'
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal menambahkan material'
            );
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    /**
     * Edit material - return JSON
     */
    public function edit($id)
    {
        $material = $this->material->get_material_by_id($id);

        if ($material) {
            header('Content-Type: application/json');
            echo json_encode($material);
        } else {
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Data tidak ditemukan'));
        }
    }

    /**
     * Update material
     */
    public function update()
    {
        $id = $this->input->post('id');

        if (!$id) {
            echo json_encode(array(
                'status' => 'error',
                'message' => 'ID material tidak ditemukan'
            ));
            return;
        }

        $data = array(
            'kode_material' => $this->input->post('kode_material'),
            'nama_material' => $this->input->post('nama_material'),
            'kategori'      => $this->input->post('kategori'),
            'satuan'        => $this->input->post('satuan'),
            'stok'          => $this->input->post('stok') ?: 0,
            'harga'         => $this->input->post('harga') ?: 0
        );

        if ($this->material->update_material($id, $data)) {
            $response = array(
                'status' => 'success',
                'message' => 'Material berhasil diupdate'
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal mengupdate material'
            );
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    /**
     * Delete material
     */
    public function delete($id)
    {
        if ($this->material->delete_material($id)) {
            $response = array(
                'status' => 'success',
                'message' => 'Material berhasil dihapus'
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Gagal menghapus material'
            );
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }
}

/* End of file Material.php */