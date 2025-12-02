<div class="card shadow-sm">
    <div class="card-header bg-success">
        <h3 class="card-title text-white"><?php echo $title; ?></h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-bg-white btn-icon me-2 mb-2" onclick="return KTDataTables.init();">
                <i class="las la-sync fs-1 text-success"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <table id="kt_datatable_rfq_head" class="align-middle table table-row-bordered gy-5">
            <thead>
                <tr class="fw-bold fs-6 text-muted">
                    <th class="min-w-50px text-center">No.</th>
                    <th class="min-w-125px text-center">No. RFQ</th>
                    <th class="min-w-125px text-center">Berkas</th>
                    <th class="min-w-80px text-center">Tgl. RFQ</th>
                    <th class="min-w-80px text-center">Tgl. Jatuh Tempo</th>
                    <th class="min-w-80px text-center">Sisa Hari Pengisian</th>
                    <th class="min-w-50px text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">7200272804</td>
                    <td class="text-center">-</td>
                    <td class="text-center">11.01.2022</td>
                    <td class="text-center">24.01.2022</td>
                    <td class="text-center">8 Hari</td>
                    <td class="text-center">
                        <a href="<?php echo site_url('services/rfq/detail'); ?>" class="btn btn-icon btn-sm btn-success me-2 mb-2">
                            <i class="fas fa-envelope-open-text"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>