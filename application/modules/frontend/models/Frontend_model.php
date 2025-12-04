<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_model extends CI_Model {

    protected $vendor;
    
    public function __construct()
    {
        parent::__construct();
        $this->vendor = $this->session->userdata('kode_vendor');
    }
    
    /**
     * Get Outstanding PO List with Items
     * Grouped by PO Number
     *
     * @return array
     */
    public function getOutstandingPOList()
    {
        // Query untuk mendapatkan data PO Header
        $sql_header = "SELECT DISTINCT
                        purchasing_document AS po_number,
                        FORMAT(posting_date, 'dd/MM/yyyy') AS order_date,
                        FORMAT(deadline_date, 'dd/MM/yyyy') AS deadline,
                        vendor_name,
                        gr_late_in_day AS late_days
                    FROM 
                        TB_S_TR_PO_OUTSTANDING
                    WHERE
                        vendor = '{$this->vendor}'
                    ORDER BY purchasing_document";
        
        $query_header = $this->db->query($sql_header);
        $po_list = [];
        $no = 1;
        
        foreach($query_header->result() as $header) {
            // Query untuk mendapatkan items per PO
            $sql_items = "SELECT
                            posnr AS item_no,
                            item_code,
                            description,
                            order_unit AS uom,
                            qty AS order_qty,
                            unitprice AS unit_price,
                            outstanding AS outstanding_qty,
                            total_price AS outstanding_value,
                            CASE 
                                WHEN qty > 0 THEN ROUND(((qty - outstanding) / qty) * 100, 0)
                                ELSE 0
                            END AS progress_penerimaan,
                            CASE 
                                WHEN qty > 0 THEN ROUND(((qty - outstanding) / qty) * 100, 0)
                                ELSE 0
                            END AS progress_pengiriman
                        FROM 
                            TB_S_TR_PO_OUTSTANDING
                        WHERE
                            vendor = '{$this->vendor}'
                            AND purchasing_document = '{$header->po_number}'
                        ORDER BY posnr";
            
            $query_items = $this->db->query($sql_items);
            $items = [];
            $grand_total = 0;
            $total_progress_penerimaan = 0;
            $total_progress_pengiriman = 0;
            $item_count = 0;
            
            foreach($query_items->result() as $item) {
                $items[] = [
                    'item_no' => $item->item_no,
                    'description' => utf8_encode($item->description),
                    'uom' => $item->uom,
                    'order_qty' => (int)$item->order_qty,
                    'unit_price' => number_format($item->unit_price, 0, ',', ','),
                    'outstanding_qty' => (int)$item->outstanding_qty,
                    'outstanding_value' => number_format($item->outstanding_value, 0, ',', ','),
                    'progress_penerimaan' => (int)$item->progress_penerimaan,
                    'progress_pengiriman' => (int)$item->progress_pengiriman
                ];
                
                $grand_total += $item->outstanding_value;
                $total_progress_penerimaan += $item->progress_penerimaan;
                $total_progress_pengiriman += $item->progress_pengiriman;
                $item_count++;
            }
            
            // Calculate average progress
            $avg_progress_penerimaan = $item_count > 0 ? round($total_progress_penerimaan / $item_count, 0) : 0;
            $avg_progress_pengiriman = $item_count > 0 ? round($total_progress_pengiriman / $item_count, 0) : 0;
            
            $po_list[] = [
                'no' => $no,
                'po_number' => $header->po_number,
                'order_date' => $header->order_date,
                'deadline' => $header->deadline,
                'vendor_name' => $header->vendor_name,
                'late_days' => $header->late_days . ' Hari',
                'grand_total' => 'Rp ' . number_format($grand_total, 0, ',', '.'),
                'progress_penerimaan' => $avg_progress_penerimaan,
                'progress_pengiriman' => $avg_progress_pengiriman,
                'items' => $items
            ];
            
            $no++;
        }
        
        return $po_list;
    }
}

/* End of file Frontend_model.php */
