<?php

defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Frontend extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // logged_in();
        $this->load->model('Frontend_model', 'frontend');
    }

    /**
     * Index Function
     *
     * @return void
     */
    public function index()
    {
        $data['title']      = "Frontend";
        $data['menu']       = "Frontend";
        $data['submenu']    = "";
        $data['content']    = "index";

        $this->load->view('default', $data);
    }

    public function confirmation(){
        $data['title']      = "Frontend";
        $data['menu']       = "Frontend";
        $data['submenu']    = "";
        $data['content']    = "confirmation/index";

        $this->load->view('default', $data);
    }

    public function rfq(){
        $data['title']      = "Frontend";
        $data['menu']       = "Frontend";
        $data['submenu']    = "";
        $data['content']    = "rfq/index";

        $this->load->view('default', $data);
    }

    public function po(){
        $data['title']      = "List Of Outstanding PO";
        $data['menu']       = "Frontend";
        $data['submenu']    = "";
        $data['content']    = "po/index";

        $this->load->view('default', $data);
    }

    public function get_po_list(){
        if($this->input->is_ajax_request()) {
            // Gunakan parameter untuk memilih data source
            $use_dummy = $this->input->post('use_dummy') ?? true;
            
            if($use_dummy) {
                // Data dummy sesuai dengan gambar
                $data = [
                    [
                        'no' => 1,
                        'po_number' => '123456789',
                        'order_date' => '17/03/2023',
                        'deadline' => '06/10/2023',
                        'vendor_name' => 'PT APINDOWAJA AMPUHPERSADA',
                        'late_days' => '10 Hari',
                        'grand_total' => 'Rp 12.254.400',
                        'progress_penerimaan' => 60,
                        'progress_pengiriman' => 70,
                        'items' => [
                            [
                                'item_no' => 'Pujuk001',
                                'description' => 'CONE PN-8 0320MM (32CM) U/APT7',
                                'uom' => 'BH',
                                'order_qty' => 6,
                                'unit_price' => '1,650,000',
                                'outstanding_qty' => 2,
                                'outstanding_value' => '2,190,000',
                                'progress_penerimaan' => 70,
                                'progress_pengiriman' => 70
                            ],
                            [
                                'item_no' => 'Pujuk002',
                                'description' => 'LH MAIN SHAFT PN18 AP17 W/KEY 645C/ HQ760',
                                'uom' => 'BH',
                                'order_qty' => 2,
                                'unit_price' => '18,000',
                                'outstanding_qty' => 2,
                                'outstanding_value' => '36,000',
                                'progress_penerimaan' => 60,
                                'progress_pengiriman' => 60
                            ],
                            [
                                'item_no' => 'Pujuk003',
                                'description' => 'RUBBER PIECE COUPLING PN-31 AP17',
                                'uom' => 'BH',
                                'order_qty' => 30,
                                'unit_price' => '1,050,000',
                                'outstanding_qty' => 10,
                                'outstanding_value' => '10,500,000',
                                'progress_penerimaan' => 50,
                                'progress_pengiriman' => 50
                            ]
                        ]
                    ],
                    [
                        'no' => 2,
                        'po_number' => '987654321',
                        'order_date' => '20/03/2023',
                        'deadline' => '15/10/2023',
                        'vendor_name' => 'PT MAJU JAYA SENTOSA',
                        'late_days' => '5 Hari',
                        'grand_total' => 'Rp 8.500.000',
                        'progress_penerimaan' => 75,
                        'progress_pengiriman' => 80,
                        'items' => [
                            [
                                'item_no' => 'MTR001',
                                'description' => 'ELECTRIC MOTOR 3 PHASE 5HP',
                                'uom' => 'UNIT',
                                'order_qty' => 5,
                                'unit_price' => '1,700,000',
                                'outstanding_qty' => 1,
                                'outstanding_value' => '1,700,000',
                                'progress_penerimaan' => 75,
                                'progress_pengiriman' => 80
                            ]
                        ]
                    ]
                ];
            } else {
                // Ambil data dari database
                $data = $this->frontend->getOutstandingPOList();
            }

            echo json_encode(['status' => 'success', 'data' => $data]);
            exit;
        }
    }

    public function export_po_excel(){
        // Load PHPSpreadsheet
        require_once FCPATH . 'vendor/autoload.php';
        
        // Ambil data PO
        $use_dummy = true; // Bisa diubah sesuai kebutuhan
        
        if($use_dummy) {
            $poData = [
                [
                    'no' => 1,
                    'po_number' => '123456789',
                    'order_date' => '17/03/2023',
                    'deadline' => '06/10/2023',
                    'vendor_name' => 'PT APINDOWAJA AMPUHPERSADA',
                    'late_days' => '10 Hari',
                    'grand_total' => 'Rp 12.254.400',
                    'progress_penerimaan' => 60,
                    'progress_pengiriman' => 70,
                    'items' => [
                        [
                            'item_no' => 'Pujuk001',
                            'description' => 'CONE PN-8 0320MM (32CM) U/APT7',
                            'uom' => 'BH',
                            'order_qty' => 6,
                            'unit_price' => '1,650,000',
                            'outstanding_qty' => 2,
                            'outstanding_value' => '2,190,000',
                            'progress_penerimaan' => 70,
                            'progress_pengiriman' => 70
                        ],
                        [
                            'item_no' => 'Pujuk002',
                            'description' => 'LH MAIN SHAFT PN18 AP17 W/KEY 645C/ HQ760',
                            'uom' => 'BH',
                            'order_qty' => 2,
                            'unit_price' => '18,000',
                            'outstanding_qty' => 2,
                            'outstanding_value' => '36,000',
                            'progress_penerimaan' => 60,
                            'progress_pengiriman' => 60
                        ],
                        [
                            'item_no' => 'Pujuk003',
                            'description' => 'RUBBER PIECE COUPLING PN-31 AP17',
                            'uom' => 'BH',
                            'order_qty' => 30,
                            'unit_price' => '1,050,000',
                            'outstanding_qty' => 10,
                            'outstanding_value' => '10,500,000',
                            'progress_penerimaan' => 50,
                            'progress_pengiriman' => 50
                        ]
                    ]
                ],
                [
                    'no' => 2,
                    'po_number' => '987654321',
                    'order_date' => '20/03/2023',
                    'deadline' => '15/10/2023',
                    'vendor_name' => 'PT MAJU JAYA SENTOSA',
                    'late_days' => '5 Hari',
                    'grand_total' => 'Rp 8.500.000',
                    'progress_penerimaan' => 75,
                    'progress_pengiriman' => 80,
                    'items' => [
                        [
                            'item_no' => 'MTR001',
                            'description' => 'ELECTRIC MOTOR 3 PHASE 5HP',
                            'uom' => 'UNIT',
                            'order_qty' => 5,
                            'unit_price' => '1,700,000',
                            'outstanding_qty' => 1,
                            'outstanding_value' => '1,700,000',
                            'progress_penerimaan' => 75,
                            'progress_pengiriman' => 80
                        ]
                    ]
                ]
            ];
        } else {
            $poData = $this->frontend->getOutstandingPOList();
        }
        
        // Buat spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // Set judul
        $sheet->setCellValue('A1', 'Laporan List of Outstanding PO');
        $sheet->mergeCells('A1:P1');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $sheet->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        
        // Set header
        $headers = [
            'A3' => 'No.',
            'B3' => 'No. PO',
            'C3' => 'Order Date - Deadline',
            'D3' => 'Vendor Name',
            'E3' => 'Item No',
            'F3' => 'Description',
            'G3' => 'UOM',
            'H3' => 'Unit Price (Rp)',
            'I3' => 'Order Qty',
            'J3' => 'Outstanding Qty',
            'K3' => 'Outstanding Value (Rp)',
            'L3' => 'Late Days',
            'M3' => 'Progress Penerimaan (%)',
            'N3' => 'Progress Penerimaan Item (%)',
            'O3' => 'Progress Pengiriman (%)',
            'P3' => 'Progress Pengiriman Item (%)'
        ];
        
        foreach($headers as $cell => $value) {
            $sheet->setCellValue($cell, $value);
        }
        
        // Style header
        $headerStyle = [
            'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['rgb' => '4472C4']
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
                'wrapText' => true
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['rgb' => '000000']
                ]
            ]
        ];
        
        $sheet->getStyle('A3:P3')->applyFromArray($headerStyle);
        $sheet->getRowDimension(3)->setRowHeight(30);
        
        // Set lebar kolom
        $sheet->getColumnDimension('A')->setWidth(6);
        $sheet->getColumnDimension('B')->setWidth(15);
        $sheet->getColumnDimension('C')->setWidth(20);
        $sheet->getColumnDimension('D')->setWidth(30);
        $sheet->getColumnDimension('E')->setWidth(12);
        $sheet->getColumnDimension('F')->setWidth(40);
        $sheet->getColumnDimension('G')->setWidth(8);
        $sheet->getColumnDimension('H')->setWidth(15);
        $sheet->getColumnDimension('I')->setWidth(10);
        $sheet->getColumnDimension('J')->setWidth(15);
        $sheet->getColumnDimension('K')->setWidth(18);
        $sheet->getColumnDimension('L')->setWidth(12);
        $sheet->getColumnDimension('M')->setWidth(15);
        $sheet->getColumnDimension('N')->setWidth(18);
        $sheet->getColumnDimension('O')->setWidth(15);
        $sheet->getColumnDimension('P')->setWidth(18);
        
        // Isi data
        $row = 4;
        foreach($poData as $po) {
            $startRow = $row;
            $itemCount = count($po['items']);
            
            foreach($po['items'] as $idx => $item) {
                // Kolom yang di-merge (hanya di baris pertama item)
                if($idx === 0) {
                    $sheet->setCellValue('A' . $row, $po['no']);
                    $sheet->setCellValue('B' . $row, $po['po_number']);
                    $sheet->setCellValue('C' . $row, $po['order_date'] . ' - ' . $po['deadline']);
                    $sheet->setCellValue('D' . $row, $po['vendor_name']);
                    $sheet->setCellValue('L' . $row, $po['late_days']);
                    $sheet->setCellValue('M' . $row, $po['progress_penerimaan']);
                    $sheet->setCellValue('O' . $row, $po['progress_pengiriman']);
                }
                
                // Data item
                $sheet->setCellValue('E' . $row, $item['item_no']);
                $sheet->setCellValue('F' . $row, $item['description']);
                $sheet->setCellValue('G' . $row, $item['uom']);
                $sheet->setCellValue('H' . $row, $item['unit_price']);
                $sheet->setCellValue('I' . $row, $item['order_qty']);
                $sheet->setCellValue('J' . $row, $item['outstanding_qty']);
                $sheet->setCellValue('K' . $row, $item['outstanding_value']);
                $sheet->setCellValue('N' . $row, $item['progress_penerimaan']);
                $sheet->setCellValue('P' . $row, $item['progress_pengiriman']);
                
                $row++;
            }
            
            // Merge cells untuk kolom PO yang sama
            if($itemCount > 1) {
                $endRow = $row - 1;
                $sheet->mergeCells('A' . $startRow . ':A' . $endRow);
                $sheet->mergeCells('B' . $startRow . ':B' . $endRow);
                $sheet->mergeCells('C' . $startRow . ':C' . $endRow);
                $sheet->mergeCells('D' . $startRow . ':D' . $endRow);
                $sheet->mergeCells('L' . $startRow . ':L' . $endRow);
                $sheet->mergeCells('M' . $startRow . ':M' . $endRow);
                $sheet->mergeCells('O' . $startRow . ':O' . $endRow);
            }
        }
        
        // Style data
        $dataStyle = [
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['rgb' => '000000']
                ]
            ]
        ];
        
        $lastRow = $row - 1;
        $sheet->getStyle('A4:P' . $lastRow)->applyFromArray($dataStyle);
        
        // Center alignment untuk kolom tertentu
        $sheet->getStyle('A4:A' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('E4:E' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('G4:G' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('I4:I' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('J4:J' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('L4:L' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('M4:M' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('N4:N' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('O4:O' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('P4:P' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        
        // Right alignment untuk kolom harga
        $sheet->getStyle('H4:H' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_RIGHT);
        $sheet->getStyle('K4:K' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_RIGHT);
        
        // Generate file
        $filename = 'Laporan_List_Outstanding_PO_' . date('Y-m-d_His') . '.xlsx';
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

    public function get_dashboard_data()
    {
        $data   = $this->dashboard->getDashboardData();

        echo json_encode($data);
        exit;
    }
}

/* End of file Dashboard.php */
