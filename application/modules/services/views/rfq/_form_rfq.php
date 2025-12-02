<style>
    /* General Styles */
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        background-color: #f8f9fa;
        color: #3f4254;
        line-height: 1.5;
    }

    .container-fluid {
        max-width: 1200px;
        margin: 0 auto;
        background-color: white;
        padding: 30px;
    }

    /* Header Section */
    .header-section {
        margin-bottom: 30px;
    }

    .green-header {
        background-color: #116834;
        border: 0.8px solid #eff2f5;
        border-radius: 6px;
        padding: 25px 23px;
    }

    .green-header h5 {
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-weight: 600;
        margin: 0;
    }

    /* Form Labels */
    .form-label {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 14px;
        color: #374151;
        margin-bottom: 8px;
    }

    .text-danger {
        color: #ef4444 !important;
    }

    /* Form Controls */
    .form-control,
    .form-select {
        background-color: #f5f8fa;
        border: 1px solid #f5f8fa;
        border-radius: 6px;
        padding: 9px 13px;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        font-size: 14px;
        color: #5e6278;
    }

    .form-control:focus,
    .form-select:focus {
        background-color: white;
        border-color: #d1d5db;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .form-control:disabled,
    .form-control[readonly],
    .form-select:disabled {
        background-color: #f5f8fa;
        border-color: #f5f8fa;
        opacity: 1;
    }

    textarea.form-control {
        resize: none;
    }

    /* Section Headings */
    .section-heading h6 {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #1f2937;
    }

    /* Tables */
    .table {
        margin-bottom: 0;
    }

    .custom-table {
        background-color: white;
        border: 1px solid #e5e7eb;
    }

    .custom-table thead {
        background-color: #f9fafb;
    }

    .custom-table th {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 14px;
        color: #374151;
        padding: 12px 16px;
        border: 1px solid #e5e7eb;
    }

    .custom-table td {
        font-family: 'Inter', sans-serif;
        font-size: 13px;
        color: #6b7280;
        padding: 10px 16px;
        border: 1px solid #e5e7eb;
    }

    /* Distribution Table */
    .distribution-table {
        font-size: 13px;
    }

    .distribution-table thead th {
        background-color: #f9fafb;
        font-weight: 500;
        color: #374151;
        padding: 10px;
        border: 1px solid #e5e7eb;
    }

    .distribution-table tbody td {
        padding: 10px;
        vertical-align: middle;
        border: 1px solid #e5e7eb;
    }

    .badge-green {
        display: inline-block;
        background-color: #dcfce7;
        color: #15803d;
        font-weight: 600;
        width: 24px;
        height: 24px;
        border-radius: 4px;
        text-align: center;
        line-height: 24px;
        margin-right: 8px;
    }

    /* Radio and Checkboxes */
    .form-check-input {
        cursor: pointer;
    }

    .form-check-input:checked {
        background-color: #009ef7;
        border-color: #009ef7;
    }

    .form-check-label {
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        font-weight: 500;
        color: #181c32;
        cursor: pointer;
    }

    /* Alerts */
    .custom-alert {
        background-color: #dcfce7;
        border: none;
        border-radius: 8px;
        padding: 16px;
    }

    .custom-alert strong {
        color: #15803d;
        font-weight: 500;
        font-size: 14px;
    }

    .alert-success {
        background-color: #dcfce7;
        border: none;
        color: #166534;
        font-size: 14px;
    }

    /* Section Backgrounds */
    .section-bg {
        background-color: #f5f8fa;
        border-radius: 6px;
        padding: 30px;
        margin-bottom: 20px;
    }

    .section-bg h6 {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 16px;
    }

    .section-bg-green {
        background-color: #dcfce7;
        border-radius: 8px;
        padding: 30px;
        margin-bottom: 20px;
    }

    /* Info Rows */
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        padding: 8px 0;
        font-size: 14px;
    }

    .info-row span:first-child {
        color: #6b7280;
    }

    .info-row span:last-child {
        font-weight: 600;
    }

    /* Summary Box */
    .summary-box {
        background-color: #f9fafb;
        border-radius: 8px;
        padding: 16px;
        margin-top: 20px;
    }

    .text-success-dark {
        color: #166534 !important;
    }

    /* Progress Bar */
    .progress {
        background-color: #e5e7eb;
        border-radius: 9999px;
    }

    .progress-bar {
        background-color: #10b981;
    }

    /* Buttons */
    .btn {
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        font-size: 14px;
        border-radius: 6px;
        padding: 10px 24px;
        transition: all 0.2s;
    }

    .btn-outline-secondary {
        border: 2px solid #f5f8fa;
        color: #374151;
        box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.1), 0px 1px 2px -1px rgba(0, 0, 0, 0.1);
    }

    .btn-outline-secondary:hover {
        background-color: #f9fafb;
        border-color: #e5e7eb;
    }

    .btn-success {
        background-color: #116834;
        border: none;
        color: white;
        font-size: 15px;
    }

    .btn-success:hover {
        background-color: #0d5229;
    }

    .btn-light {
        background-color: white;
        border: 0.8px solid rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 8px 12px;
    }

    .btn-light:hover {
        background-color: #f9fafb;
    }

    .btn-sm {
        padding: 6px 10px;
        font-size: 13px;
    }

    /* Utilities */
    .text-muted {
        color: #6b7280 !important;
    }

    .text-primary {
        color: #009ef7 !important;
    }

    .text-success {
        color: #10b981 !important;
    }

    .fw-medium {
        font-weight: 500 !important;
    }

    .fw-semibold {
        font-weight: 600 !important;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    /* Input Group */
    .input-group-text {
        background-color: white;
        border: 1px solid #d1d5db;
        border-left: none;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .container-fluid {
            padding: 15px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .info-row {
            font-size: 13px;
        }

        .section-bg,
        .section-bg-green {
            padding: 20px;
        }
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    /* Form check inline spacing */
    .form-check-inline {
        margin-right: 20px;
    }

    /* SVG icons styling */
    svg {
        vertical-align: middle;
    }

    /* Additional styling for matching the design */
    hr {
        border-color: #d1d5db;
        opacity: 1;
    }

    /* Table hover effect */
    .table tbody tr:hover {
        background-color: #f9fafb;
    }

    /* Checkbox in table */
    .table .form-check-input {
        margin-top: 0;
    }
</style>


<div class="container-fluid py-4">
    <!-- Header -->
    <div class="header-section mb-4">
        <div class="green-header">
            <h5 class="text-white mb-0">Permintaan Harga | 123456 | NPK 15-15-6-4</h5>
        </div>
    </div>

    <!-- Kode Jasa -->
    <div class="row mb-3">
        <div class="col-md-2">
            <label class="form-label">Kode Jasa</label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control bg-light" value="Pupuk - 001" readonly>
        </div>
    </div>

    <!-- Nama Jasa -->
    <div class="row mb-3">
        <div class="col-md-2">
            <label class="form-label">Nama Jasa</label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control bg-light" value="NPK 15-15-6-4" readonly>
        </div>
    </div>

    <!-- MAT -->
    <div class="row mb-4">
        <div class="col-md-2">
            <label class="form-label">MAT</label>
        </div>
        <div class="col-md-6">
            <textarea class="form-control bg-light" rows="3" readonly>MAT: CAST STEEL
Dipakai untuk : HYDROCYCLONE</textarea>
        </div>
    </div>

    <!-- Spesifikasi Kebutuhan Kandungan Unsur Hara -->
    <div class="section-heading mb-3">
        <h6>Spesifikasi Kebutuhan Kandungan Unsur Hara</h6>
    </div>

    <!-- Table -->
    <div class="table-responsive mb-4">
        <table class="table table-bordered custom-table">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Parameter</th>
                    <th>Spesifikasi (%)</th>
                    <th>Metode Analisis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nitrogen</td>
                    <td>Min 0mm</td>
                    <td>Spectrophotometry</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>N</td>
                    <td>25 Max</td>
                    <td>Spectrophotometry</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Phospat Total</td>
                    <td>1.0 Min</td>
                    <td>Spectrophotometry</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kalium</td>
                    <td>1.0 Min</td>
                    <td>Spectrophotometry</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mgt Total</td>
                    <td>25 Min</td>
                    <td>Titasi</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Jumlah Permintaan -->
    <div class="row mb-3">
        <div class="col-md-2">
            <label class="form-label">Jumlah Permintaan <span class="text-danger">*</span></label>
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control bg-light" value="110" readonly>
        </div>
        <div class="col-md-3">
            <select class="form-select bg-light" disabled>
                <option>Karung</option>
            </select>
        </div>
    </div>

    <!-- Aplikasi unit tersebar? -->
    <div class="row mb-3">
        <div class="col-md-2">
            <label class="form-label">Aplikasi unit tersebar? <span class="text-danger">*</span></label>
        </div>
        <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="aplikasiUnit" id="aplikasiYa" value="ya">
                <label class="form-check-label" for="aplikasiYa">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="aplikasiUnit" id="aplikasiTidak" value="tidak" checked>
                <label class="form-check-label" for="aplikasiTidak">Tidak</label>
            </div>
        </div>
    </div>

    <!-- Status Permintaan Barang -->
    <div class="row mb-4">
        <div class="col-md-2">
            <label class="form-label">Status Permintaan Barang</label>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="statusPermintaan" id="sesuaiPermintaan" checked>
                <label class="form-check-label" for="sesuaiPermintaan">
                    Sesuai Sesuai Permintaan
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="statusPermintaan" id="penawaranSupply">
                <label class="form-check-label" for="penawaranSupply">
                    Penawaran Supply Melebihi Permintaan
                </label>
            </div>
        </div>
    </div>

    <!-- Modal Permintaan -->
    <div class="row mb-4">
        <div class="col-md-2">
            <label class="form-label">Modal Permintaan <span class="text-danger">*</span></label>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="modalPermintaan" id="readyStock">
                <label class="form-check-label" for="readyStock">
                    Ready Stock untuk sesuai kebun dengan sesuai dengan <span class="text-primary">TPKKF</span> yang tidak perlu
                </label>
            </div>
        </div>
    </div>

    <!-- Success Alert -->
    <div class="alert alert-success custom-alert mb-4" role="alert">
        <div class="d-flex align-items-start">
            <svg class="me-2 flex-shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM8.707 7.293C8.5184 7.11084 8.2658 7.01005 8.0036 7.01233C7.7414 7.0146 7.49059 7.11977 7.30518 7.30518C7.11977 7.49059 7.0146 7.7414 7.01233 8.0036C7.01005 8.2658 7.11084 8.5184 7.293 8.707L8.586 10L7.293 11.293C7.19749 11.3852 7.12131 11.4956 7.0689 11.6176C7.01649 11.7396 6.9889 11.8708 6.98775 12.0036C6.9866 12.1364 7.0119 12.2681 7.06218 12.391C7.11246 12.5139 7.18671 12.6255 7.2806 12.7194C7.3745 12.8133 7.48615 12.8875 7.60905 12.9378C7.73194 12.9881 7.86362 13.0134 7.9964 13.0123C8.12918 13.0111 8.2604 12.9835 8.3824 12.9311C8.50441 12.8787 8.61475 12.8025 8.707 12.707L10 11.414L11.293 12.707C11.4816 12.8892 11.7342 12.99 11.9964 12.9877C12.2586 12.9854 12.5094 12.8802 12.6948 12.6948C12.8802 12.5094 12.9854 12.2586 12.9877 11.9964C12.99 11.7342 12.8892 11.4816 12.707 11.293L11.414 10L12.707 8.707C12.8892 8.5184 12.99 8.2658 12.9877 8.0036C12.9854 7.7414 12.8802 7.49059 12.6948 7.30518C12.5094 7.11977 12.2586 7.0146 11.9964 7.01233C11.7342 7.01005 11.4816 7.11084 11.293 7.293L10 9.586L8.707 8.293V7.293Z" fill="#15803D" />
            </svg>
            <div>
                <strong>✓ Total distribusi per kebun sudah sesuai dengan target (110 Karung).</strong>
                <div class="text-muted small mt-1">Dalam satuan konversi: 2.20 Sak</div>
            </div>
        </div>
    </div>

    <!-- Distribution Table Section -->
    <div class="section-bg mb-4">
        <h6 class="mb-3">Distribusi Kebutuhan Berdasarkan Divisi Hara</h6>

        <div class="table-responsive">
            <table class="table table-sm distribution-table">
                <thead>
                    <tr>
                        <th style="width: 40px;"><input type="checkbox" class="form-check-input" checked></th>
                        <th>Divisi / Kebun</th>
                        <th>Lokasi Kirim</th>
                        <th>Koordinat</th>
                        <th>Qty (Kg)</th>
                        <th>Moda</th>
                        <th>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </th>
                        <th>Biaya (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Bangai Mandiri
                        </td>
                        <td>DIV B - 40.9 KM</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>20.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Adolina Permai
                        </td>
                        <td>pilih lokasi</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>22.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Mata Pao
                        </td>
                        <td>pilih lokasi</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>20.500</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Pagar Benih
                        </td>
                        <td>pilih lokasi</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>18.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Tanjung Garbus
                        </td>
                        <td>pilih lokasi</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>21.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Tinjowan
                        </td>
                        <td>pilih lokasi</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>20.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Lau Rakit
                        </td>
                        <td>pilih lokasi</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>23.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Selandi
                        </td>
                        <td>100 Moda</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>20.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Tandem Hulu
                        </td>
                        <td>10 Karung</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>18.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-check-input" checked></td>
                        <td>
                            <div class="badge-green">B</div> Abia Nauli
                        </td>
                        <td>10 Karung</td>
                        <td>10 Karung</td>
                        <td>0.05</td>
                        <td>Truck</td>
                        <td>
                            <button class="btn btn-sm btn-light">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <circle cx="8" cy="8" r="7" stroke="currentColor" />
                                </svg>
                            </button>
                        </td>
                        <td>21.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Ringkasan Penawaran Section -->
    <div class="section-bg mb-4">
        <div class="row">
            <div class="col-md-6">
                <h6 class="mb-3">Ringkasan Pengiriman</h6>

                <div class="alert alert-success mb-3">
                    <div class="d-flex align-items-start">
                        <svg class="me-2 flex-shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18 10C18 12.1217 17.1571 14.1566 15.6569 15.6569C14.1566 17.1571 12.1217 18 10 18C7.87827 18 5.84344 17.1571 4.34315 15.6569C2.84285 14.1566 2 12.1217 2 10C2 7.87827 2.84285 5.84344 4.34315 4.34315C5.84344 2.84285 7.87827 2 10 2C12.1217 2 14.1566 2.84285 15.6569 4.34315C17.1571 5.84344 18 7.87827 18 10ZM11 6C11 6.26522 10.8946 6.51957 10.7071 6.70711C10.5196 6.89464 10.2652 7 10 7C9.73478 7 9.48043 6.89464 9.29289 6.70711C9.10536 6.51957 9 6.26522 9 6C9 5.73478 9.10536 5.48043 9.29289 5.29289C9.48043 5.10536 9.73478 5 10 5C10.2652 5 10.5196 5.10536 10.7071 5.29289C10.8946 5.48043 11 5.73478 11 6ZM9 9C8.73478 9 8.48043 9.10536 8.29289 9.29289C8.10536 9.48043 8 9.73478 8 10C8 10.2652 8.10536 10.5196 8.29289 10.7071C8.48043 10.8946 8.73478 11 9 11V14C9 14.2652 9.10536 14.5196 9.29289 14.7071C9.48043 14.8946 9.73478 15 10 15H11C11.2652 15 11.5196 14.8946 11.7071 14.7071C11.8946 14.5196 12 14.2652 12 14C12 13.7348 11.8946 13.4804 11.7071 13.2929C11.5196 13.1054 11.2652 13 11 13V10C11 9.73478 10.8946 9.48043 10.7071 9.29289C10.5196 9.10536 10.2652 9 10 9H9Z" fill="#166534" />
                        </svg>
                        <div>
                            <div>Sempurna! Penawaran Anda memenuhi 100% dari</div>
                            <div>total permintaan.</div>
                        </div>
                    </div>
                </div>

                <div class="info-row">
                    <span class="text-muted">Total Permintaan (Socfindo)</span>
                    <span class="fw-semibold">110 Karung</span>
                </div>
                <div class="info-row">
                    <span class="fw-medium">Target Supply Anda</span>
                    <span class="fw-bold">110 Karung</span>
                </div>
                <div class="info-row">
                    <span class="text-muted">Total Kebun</span>
                    <span class="fw-semibold">11 Kebun</span>
                </div>
                <div class="info-row">
                    <span class="text-muted fw-medium">Selisih</span>
                    <span class="text-success fw-bold fs-5">0 Karung</span>
                </div>

                <div class="mt-3">
                    <div class="d-flex justify-content-between mb-1">
                        <small class="text-muted">Persentase Terpenuhi</small>
                        <small class="fw-bold">100.0%</small>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                    </div>
                    <div class="text-end mt-1">
                        <small class="text-success fw-medium">Penuh Terpenuhi</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h6 class="mb-3">Ringkasan Supply Mode</h6>

                <div class="info-row">
                    <span class="text-muted">Mode</span>
                    <span class="text-success fw-semibold">Sesuai Permintaan</span>
                </div>
                <div class="info-row">
                    <span class="text-muted">Ready Stock</span>
                    <span class="fw-semibold">110 Karung (100%)</span>
                </div>
                <div class="info-row">
                    <span class="text-muted">Indent</span>
                    <span class="fw-semibold">0 Karung (0%)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Harga & Biaya -->
    <div class="section-heading mb-3">
        <h6>Detail Harga & Biaya</h6>
    </div>

    <div class="section-bg-green mb-4">
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Mata Uang <span class="text-danger">*</span></label>
                <select class="form-select" disabled>
                    <option>IDR (Indonesian Rupiah)</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Harga Satuan (per Karung) *</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Masa Berlaku Harga</label>
                <div class="input-group">
                    <input type="text" class="form-control" value="10/27/2025" readonly>
                    <span class="input-group-text">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <rect x="2" y="3" width="10" height="9" rx="1" stroke="currentColor" />
                            <path d="M4 1V3M10 1V3M2 5H12" stroke="currentColor" stroke-linecap="round" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <div class="summary-box">
            <h6 class="text-success-dark mb-3">Ringkasan Biaya</h6>

            <div class="d-flex justify-content-between mb-2">
                <span class="text-muted">Total Harga Barang</span>
                <span class="fw-medium">Rp. 16. 500 .000</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <span class="text-muted">Total Harga Transportasi (Kebun Terpilih)</span>
                <span class="fw-medium">Rp 238. 000</span>
            </div>

            <hr class="my-3">

            <div class="d-flex justify-content-between">
                <span class="fw-semibold text-success-dark fs-5">Total Harga Keseluruhan</span>
                <span class="fw-bold text-success-dark fs-5">Rp 16. 738. 000</span>
            </div>
        </div>
    </div>

    <!-- Dibuat Oleh -->
    <div class="row mb-4">
        <div class="col-md-2">
            <label class="form-label">Dibuat Oleh <span class="text-danger">*</span></label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" value="Jacko (PT . Pupuk Setia Abadi)" readonly>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="d-flex justify-content-end gap-2">
        <button class="btn btn-outline-secondary px-4">Kembali</button>
        <button class="btn btn-success px-4">Simpan</button>
    </div>
</div>