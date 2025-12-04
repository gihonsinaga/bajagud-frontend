<div class="card shadow-sm">
    <div class="card-header bg-success d-flex justify-content-between align-items-center">
        <h3 class="card-title text-white mb-0">List Of Outstanding PO</h3>
        <button type="button" class="btn btn-sm btn-bg-white btn-icon me-2 mb-2" onclick="loadPOData();">
            <i class="las la-sync fs-2"></i>
        </button>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <button class="btn btn-sm btn-success" onclick="exportToExcel()">
                <i class="las la-file-excel fs-3"></i> Export
            </button>
            <div class="position-relative">
                <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Search:" style="min-width: 250px;">
            </div>
        </div>
        
        <div class="po-list-wrapper">
            <div class="po-header-labels">
                <div class="po-header-row fw-bold fs-6 text-muted">
                    <div style="text-align: center;">No.</div>
                    <div>No. PO</div>
                    <div>Order Date - <br>Deadline</div>
                    <div>Vendor Name</div>
                    <div style="text-align: center;">Late Days</div>
                    <div style="text-align: center;">Grand Total</div>
                    <div style="text-align: center;">Progress<br>Penerimaan</div>
                    <div style="text-align: center;">Progress<br>Pengiriman</div>
                    <div style="text-align: center;">Aksi</div>
                </div>
            </div>
            
            <div id="po_list_container">
                <!-- PO items will be loaded here -->
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <div>
                <select id="entriesPerPage" class="form-select form-select-sm" style="width: auto;">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="-1">All</option>
                </select>
            </div>
            <div id="pagination_info">Showing 1 to 1 of 1 records</div>
            <div>
                <button class="btn btn-sm btn-primary" id="pagination_btn">1</button>
            </div>
        </div>
    </div>
</div>


<!-- alternatif untuk menampilkan data dummy tanpa database next ganti pakai kttables-->
<script type="text/javascript">
"use strict";

let poData = [];
let filteredData = [];

function loadPOData() {
    // Load data via AJAX
    $.ajax({
        url: '<?php echo site_url("frontend/get_po_list"); ?>',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if(response.status === 'success') {
                poData = response.data;
                filteredData = [...poData];
                renderPOList();
            }
        },
        error: function() {
            console.error('Failed to load PO data');
        }
    });
}

function togglePODetails(index) {
    const detailsElement = document.getElementById(`po-details-${index}`);
    const icon = document.getElementById(`toggle-icon-${index}`);
    
    if (detailsElement.classList.contains('show')) {
        detailsElement.classList.remove('show');
        icon.classList.remove('la-angle-up');
        icon.classList.add('la-angle-down');
    } else {
        detailsElement.classList.add('show');
        icon.classList.remove('la-angle-down');
        icon.classList.add('la-angle-up');
    }
}

function renderPOList() {
    const container = document.getElementById('po_list_container');
    let html = '';
    
    filteredData.forEach((po, index) => {
        html += `
            <div class="po-item">
                <div class="po-header">
                    <div class="po-header-row fs-500">
                        <div style="font-weight: 500; text-align: center;">${po.no}</div>
                        <div class="po-number">${po.po_number}</div>
                        <div class="po-date">${po.order_date} -<br>${po.deadline}</div>
                        <div class="po-vendor">${po.vendor_name}</div>
                        <div class="po-late-days">${po.late_days}</div>
                        <div class="po-grand-total">${po.grand_total}</div>
                      
                            <div class="po-progress-value">${po.progress_penerimaan}%</div>
                        
                     
                            <div class="po-progress-value">${po.progress_pengiriman}%</div>
                      
                        <div class="po-actions-container">
                            <button class="btn btn-success btn-sm" title="View">
                                <i class="las la-eye fs-4"></i>
                            </button>
                            <button class="btn btn-success btn-sm" title="Print">
                                <i class="fas fa-envelope-open-text fs-4"></i>
                            </button>
                            <button class="btn btn-success btn-sm" title="Toggle Details" onclick="togglePODetails(${index})">
                                <i id="toggle-icon-${index}" class="las la-angle-down fs-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div id="po-details-${index}" class="po-details">
                    <table class="detail-table">
                        <thead>
                            <tr>
                                <th style="width: 50px;">Item</th>
                                <th style="width: 120px;">Item No</th>
                                <th>Description</th>
                                <th style="width: 60px;">UOM</th>
                                <th style="width: 80px;">Order Qty</th>
                                <th style="width: 100px;">Unit Price</th>
                                <th style="width: 100px;">Outstanding Qty</th>
                                <th style="width: 120px;">Outstanding Value</th>
                                <th style="width: 150px;">Progress Penerimaan</th>
                                <th style="width: 150px;">Progress Pengiriman</th>
                            </tr>
                        </thead>
                        <tbody>
        `;
        
        po.items.forEach((item, itemIndex) => {
            html += `
                <tr>
                    <td class="text-center">${itemIndex + 1}</td>
                    <td class="text-center" style="color: #0d6efd;">${item.item_no}</td>
                    <td>${item.description}</td>
                    <td class="text-center">${item.uom}</td>
                    <td class="text-center">${item.order_qty}</td>
                    <td class="text-right">${item.unit_price}</td>
                    <td class="text-center">${item.outstanding_qty}</td>
                    <td class="text-right">${item.outstanding_value}</td>
                    <td>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: ${item.progress_penerimaan}%;">
                                ${item.progress_penerimaan}%
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: ${item.progress_pengiriman}%;">
                                ${item.progress_pengiriman}%
                            </div>
                        </div>
                    </td>
                </tr>
            `;
        });
        
        html += `
                        </tbody>
                    </table>
                </div>
            </div>
        `;
    });
    
    container.innerHTML = html;
}

function exportToExcel() {
    // Redirect ke endpoint export
    window.location.href = '<?php echo site_url("frontend/export_po_excel"); ?>';
}

// Search functionality
document.addEventListener('DOMContentLoaded', function() {
    loadPOData();
    
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            filteredData = poData.filter(po => {
                return po.po_number.toLowerCase().includes(searchTerm) ||
                       po.vendor_name.toLowerCase().includes(searchTerm) ||
                       po.late_days.toLowerCase().includes(searchTerm);
            });
            renderPOList();
        });
    }
});
</script>
