<div class="card shadow-sm">
          <div class="card-header bg-success">
          <h3 class="card-title fw-bold mt-1 text-white"> Pengisian Form RFQ No : 0123456789 | 0987654</h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-bg-white btn-icon me-2 mb-2" onclick="return KTDataTables.init();">
                <i class="las la-sync fs-1 text-success"></i>
            </button>
        </div>
    </div>


    <!-- Card RFQ Info -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
                 <div class="row g-3 mb-3">
              <div class="">
               <label class="form-label">Kode Jasa</label>
                    <input type="text" name="service_code" class="fw-semibold form-control form-control-solid" readonly="true" placeholder="Pupuk A01">
                      <!-- <div class="fv-plugins-message-container invalid-feedback"></div> -->
                </div>               
            </div>
            <div class="row g-3 mb-3">
                <div class="">
                    <label class="form-label">Nama Jasa</label>
                    <input type="text" name="service_name" class="fw-semibold form-control form-control-solid" readonly="true" placeholder="Pupuk NPK 15-15-6-4">

                </div>
            </div>

            <label class="form-label mt-3">Deskripsi</label>
                   <input type="text" name="service_name" class="fw-semibold form-control form-control-solid mb-3" readonly="true" placeholder="MAT: CAST STEEL">
                     <textarea class="form-control form-control-solid" readonly="true"  name="material_desc" rows="3" ></textarea>
        </div>
    </div>

    <!-- Card Equivalen -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3">Equivalen</h6>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label">Spesifikasi <span class="text-danger">*</span></label>
                    <input type="text" name="equiv_spesifikasi" class="form-control" placeholder="Pupuk A01" value="Pupuk A01">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Merek <span class="text-danger">*</span></label>
                    <input type="text" name="equiv_merek" class="form-control" placeholder="Pupuk Etanol" value="Pupuk Etanol">
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label">Tipe</label>
                    <input type="text" name="equiv_tipe" class="form-control" placeholder="Pupuk Gandum" value="Pupuk Gandum">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Buatan <span class="text-danger">*</span></label>
                    <input type="text" name="equiv_buatan" class="form-control" placeholder="PT. Indo Makmur" value="PT. Indo Makmur">
                </div>
            </div>
        </div>
    </div>

    <!-- Card Spesifikasi -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3">Spesifikasi Kebutuhan Kandungan Unsur Hara</h6>

            <!-- Desktop Table View -->
            <div class="table-responsive d-none d-md-block">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No.</th>
                            <th>Parameter</th>
                            <th>Spesifikasi (%)</th>
                            <th>Metode Analisis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Moisture</td><td>15% Min</td><td>Kjedahlis</td></tr>
                        <tr><td>2</td><td>N</td><td>10% Min</td><td>Kjedahlis</td></tr>
                        <tr><td>3</td><td>P2O5 Total</td><td>6% Min</td><td>Flame Photometry</td></tr>
                        <tr><td>4</td><td>K2O</td><td>4% Min</td><td>Flame Photometry</td></tr>
                        <tr><td>5</td><td>MgO Total</td><td>2% Min</td><td>AAS</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="d-md-none">
                <div class="card border mb-2">
                    <div class="card-body p-3">
                        <div class="row mb-1"><div class="col-5 text-muted small">No.</div><div class="col-7 fw-semibold">1</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Parameter</div><div class="col-7 fw-semibold">Moisture</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Spesifikasi (%)</div><div class="col-7">15% Min</div></div>
                        <div class="row"><div class="col-5 text-muted small">Metode Analisis</div><div class="col-7">Kjedahlis</div></div>
                    </div>
                </div>
                <div class="card border mb-2">
                    <div class="card-body p-3">
                        <div class="row mb-1"><div class="col-5 text-muted small">No.</div><div class="col-7 fw-semibold">2</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Parameter</div><div class="col-7 fw-semibold">N</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Spesifikasi (%)</div><div class="col-7">10% Min</div></div>
                        <div class="row"><div class="col-5 text-muted small">Metode Analisis</div><div class="col-7">Kjedahlis</div></div>
                    </div>
                </div>
                <div class="card border mb-2">
                    <div class="card-body p-3">
                        <div class="row mb-1"><div class="col-5 text-muted small">No.</div><div class="col-7 fw-semibold">3</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Parameter</div><div class="col-7 fw-semibold">P2O5 Total</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Spesifikasi (%)</div><div class="col-7">6% Min</div></div>
                        <div class="row"><div class="col-5 text-muted small">Metode Analisis</div><div class="col-7">Flame Photometry</div></div>
                    </div>
                </div>
                <div class="card border mb-2">
                    <div class="card-body p-3">
                        <div class="row mb-1"><div class="col-5 text-muted small">No.</div><div class="col-7 fw-semibold">4</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Parameter</div><div class="col-7 fw-semibold">K2O</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Spesifikasi (%)</div><div class="col-7">4% Min</div></div>
                        <div class="row"><div class="col-5 text-muted small">Metode Analisis</div><div class="col-7">Flame Photometry</div></div>
                    </div>
                </div>
                <div class="card border mb-2">
                    <div class="card-body p-3">
                        <div class="row mb-1"><div class="col-5 text-muted small">No.</div><div class="col-7 fw-semibold">5</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Parameter</div><div class="col-7 fw-semibold">MgO Total</div></div>
                        <div class="row mb-1"><div class="col-5 text-muted small">Spesifikasi (%)</div><div class="col-7">2% Min</div></div>
                        <div class="row"><div class="col-5 text-muted small">Metode Analisis</div><div class="col-7">AAS</div></div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- ================= SPESIFIKASI YANG DITAWARKAN ================= -->
<div class="card shadow-sm border-0 mb-4">
   
       
   
    <div class="card-body">
         <label class="form-label required">Spesifikasi yang Ditawarkan </label>
        <div class="form-group mb-3">
            <div class="mt-5">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="metode_pemenuhan" id="sesuai_socfindo" value="sesuai" checked onchange="toggleTabelSpesifikasi()">
                    <label class="form-check-label" for="sesuai_socfindo">Sesuai Permintaan Socfindo</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="metode_pemenuhan" id="berbeda_socfindo" value="berbeda" onchange="toggleTabelSpesifikasi()">
                    <label class="form-check-label" for="berbeda_socfindo">Berbeda dengan Permintaan Socfindo</label>
                </div>
            </div>
        </div>

        <div id="alert_sesuai_socfindo" class="alert alert-success" style="display: block;">
            Spesifikasi mengikuti permintaan Socfindo seperti tercantum pada tabel di atas.
        </div>

        <div id="container_tabel_spesifikasi" style="display: none;">
            <div class="alert alert-warning" role="alert">
                <strong>Perhatian:</strong> Anda akan menginputkan spesifikasi yang berbeda dari permintaan Socfindo. Pastikan data yang diinput akurat.
            </div>

            <div class="table-responsive">
                <table class="table table-bordered align-middle" id="tabel_spesifikasi_ditawarkan">
                    <thead class="table-light">
                        <tr>
                            <th width="50">No.</th>
                            <th>Parameter <span class="text-danger">*</span></th>
                            <th>Spesifikasi (%) <span class="text-danger">*</span></th>
                            <th>Metode Analisis <span class="text-danger">*</span></th>
                            <th width="80">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><input type="text" class="form-control" name="parameter[]" placeholder="Moisture" value="Moisture"></td>
                            <td><input type="text" class="form-control" name="spesifikasi[]" placeholder="10" value="10"></td>
                            <td><input type="text" class="form-control" name="metode[]" placeholder="Kjeldahl" value="Kjeldahl"></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-light-danger btn-icon" onclick="hapusBaris(this)">
                                    <i class="las la-trash fs-3"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><input type="text" class="form-control" name="parameter[]" placeholder="N" value="N"></td>
                            <td><input type="text" class="form-control" name="spesifikasi[]" placeholder="20" value="20"></td>
                            <td><input type="text" class="form-control" name="metode[]" placeholder="Spectrophotometry" value="Spectrophotometry"></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-light-danger btn-icon" onclick="hapusBaris(this)">
                                    <i class="las la-trash fs-3"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><input type="text" class="form-control" name="parameter[]" placeholder="P2O5 Total" value="P2O5 Total"></td>
                            <td><input type="text" class="form-control" name="spesifikasi[]" placeholder="2" value="2"></td>
                            <td><input type="text" class="form-control" name="metode[]" placeholder="Oven" value="Oven"></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-light-danger btn-icon" onclick="hapusBaris(this)">
                                    <i class="las la-trash fs-3"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><input type="text" class="form-control" name="parameter[]" placeholder="K2O" value="K2O"></td>
                            <td><input type="text" class="form-control" name="spesifikasi[]" placeholder="20" value="20"></td>
                            <td><input type="text" class="form-control" name="metode[]" placeholder="AAS" value="AAS"></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-light-danger btn-icon" onclick="hapusBaris(this)">
                                    <i class="las la-trash fs-3"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><input type="text" class="form-control" name="parameter[]" placeholder="MgO Total" value="MgO Total"></td>
                            <td><input type="text" class="form-control" name="spesifikasi[]" placeholder="20" value="20"></td>
                            <td><input type="text" class="form-control" name="metode[]" placeholder="Oven" value="Oven"></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-light-danger btn-icon" onclick="hapusBaris(this)">
                                    <i class="las la-trash fs-3"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                <small class="text-muted">* Pastikan semua kolom wajib diisi dengan benar.</small>
            </div>

            <div class="text-end mt-3">
                <button type="button" class="btn btn-success btn-sm" onclick="tambahBarisSpesifikasi()">
                    <i class="las la-plus fs-3"></i> Tambah Baris Spesifikasi
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ================= JUMLAH PERMINTAAN ================= -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label fw-bold">Jumlah Permintaan <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="number" class="form-control form-control-solid" id="jumlah_permintaan" value="110" readonly>
                    <span class="input-group-text">KG</span>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-bold">Satuan</label>
                <div class="input-group">
                    <input type="text" class="form-control form-control-solid" value="KG" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================= STATUS PERMINTAAN BARANG ================= -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <label class="form-label fw-bold">Status Permintaan Barang <span class="text-danger">*</span></label>
        
        <div class="d-flex gap-4 mb-3 mt-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_permintaan" id="status_tersedia" value="tersedia" checked onchange="toggleStatusPermintaan()">
                <label class="form-check-label" for="status_tersedia">
                    Tersedia Sesuai Permintaan
                </label>
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_permintaan" id="status_kurang" value="kurang" onchange="toggleStatusPermintaan()">
                <label class="form-check-label" for="status_kurang">
                    Tersedia Kurang Dari Permintaan
                </label>
            </div>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status_permintaan" id="status_indent" value="indent" onchange="toggleStatusPermintaan()">
                <label class="form-check-label" for="status_indent">
                    Indent
                </label>
            </div>
        </div>

        <!-- Form untuk Tersedia Kurang Dari Permintaan -->
        <div id="form_kurang_permintaan" class="p-3 bg-light rounded" style="display: none;">
            <label class="form-label fw-bold">Masukkan Jumlah Barang yang Tersedia</label>
            <div class="input-group" style="max-width: 400px;">
                <input type="number" class="form-control" id="jumlah_kurang" value="80">
                <span class="input-group-text">KG</span>
            </div>
            <small class="text-success fw-bold">Maksimal : 110 KG</small>
        </div>

        <!-- Form untuk Indent -->
        <div id="form_indent" class="p-3 bg-light rounded" style="display: none;">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Total yang Ditawarkan <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="total_ditawarkan" value="110" onchange="hitungIndent()">
                        <span class="input-group-text">KG</span>
                    </div>
                    <small class="text-muted">Bisa sesuai [110] atau kurang dari permintaan</small>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Jumlah Ready Stock <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="ready_stock" value="60" onchange="hitungIndent()">
                        <span class="input-group-text">KG</span>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Jumlah Indent (Otomatis)</label>
                    <div class="input-group">
                        <input type="number" class="form-control form-control-solid" id="jumlah_indent" value="50" readonly>
                        <span class="input-group-text">KG</span>
                    </div>
                    <small class="text-muted">= Total - Ready Stock</small>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Waktu Indent <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="waktu_indent" value="14">
                        <span class="input-group-text">Hari</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function tambahBarisSpesifikasi() {
    const tbody = document.querySelector('#tabel_spesifikasi_ditawarkan tbody');
    const rowCount = tbody.rows.length + 1;
    
    const newRow = `
        <tr>
            <td>${rowCount}</td>
            <td><input type="text" class="form-control" name="parameter[]" placeholder="Parameter"></td>
            <td><input type="text" class="form-control" name="spesifikasi[]" placeholder="Spesifikasi"></td>
            <td><input type="text" class="form-control" name="metode[]" placeholder="Metode Analisis"></td>
            <td class="text-center">
                <button type="button" class="btn btn-sm btn-light-danger btn-icon" onclick="hapusBaris(this)">
                    <i class="las la-trash fs-3"></i>
                </button>
            </td>
        </tr>
    `;
    
    tbody.insertAdjacentHTML('beforeend', newRow);
    updateNomorUrut();
}

function hapusBaris(btn) {
    const row = btn.closest('tr');
    row.remove();
    updateNomorUrut();
}

function updateNomorUrut() {
    const tbody = document.querySelector('#tabel_spesifikasi_ditawarkan tbody');
    const rows = tbody.querySelectorAll('tr');
    rows.forEach((row, index) => {
        row.cells[0].textContent = index + 1;
    });
}

function toggleStatusPermintaan() {
    const statusTersedia = document.getElementById('status_tersedia').checked;
    const statusKurang = document.getElementById('status_kurang').checked;
    const statusIndent = document.getElementById('status_indent').checked;
    
    const formKurang = document.getElementById('form_kurang_permintaan');
    const formIndent = document.getElementById('form_indent');
    
    if (statusKurang) {
        formKurang.style.display = 'block';
        formIndent.style.display = 'none';
    } else if (statusIndent) {
        formKurang.style.display = 'none';
        formIndent.style.display = 'block';
    } else {
        // Tersedia Sesuai Permintaan - tidak tampilkan form apapun
        formKurang.style.display = 'none';
        formIndent.style.display = 'none';
    }
}

function toggleTabelSpesifikasi() {
    const berbeda = document.getElementById('berbeda_socfindo').checked;
    const containerTabel = document.getElementById('container_tabel_spesifikasi');
    const alertSesuai = document.getElementById('alert_sesuai_socfindo');
    
    if (berbeda) {
        containerTabel.style.display = 'block';
        alertSesuai.style.display = 'none';
    } else {
        containerTabel.style.display = 'none';
        alertSesuai.style.display = 'block';
    }
}

function hitungIndent() {
    const totalDitawarkan = parseFloat(document.getElementById('total_ditawarkan').value) || 0;
    const readyStock = parseFloat(document.getElementById('ready_stock').value) || 0;
    const indent = totalDitawarkan - readyStock;
    
    document.getElementById('jumlah_indent').value = indent >= 0 ? indent : 0;
}

let currentButtonGudang = null;

function toggleKebunRow(checkbox) {
    // Cek apakah di dalam table row atau card
    const row = checkbox.closest('tr');
    const card = checkbox.closest('.card[data-kebun]');
    
    let inputHarga, btnGudang, namaKebun;
    
    if (row) {
        // Desktop table view
        inputHarga = row.querySelector('.harga-transport');
        btnGudang = row.querySelector('.btn-pilih-gudang');
        namaKebun = row.dataset.kebun;
    } else if (card) {
        // Mobile card view
        inputHarga = card.querySelector('.harga-transport');
        btnGudang = card.querySelector('.btn-pilih-gudang');
        namaKebun = card.dataset.kebun;
    }
    
    if (checkbox.checked) {
        inputHarga.disabled = false;
        inputHarga.classList.remove('form-control-solid');
        btnGudang.disabled = false;
        
        // Tambahkan row ke tabel biaya lain-lain
        tambahRowBiayaLain(namaKebun);
    } else {
        inputHarga.disabled = true;
        inputHarga.classList.add('form-control-solid');
        btnGudang.disabled = true;
        
        // Hapus row dari tabel biaya lain-lain
        hapusRowBiayaLain(namaKebun);
    }
}

function tambahRowBiayaLain(namaKebun) {
    const tbody = document.getElementById('tbody_biaya_lain');
    const mobileContainer = document.getElementById('mobile_biaya_lain');
    
    // Hapus pesan "Pilih kebun terlebih dahulu" jika ada (Desktop)
    const emptyRow = tbody.querySelector('tr td[colspan="4"]');
    if (emptyRow) {
        emptyRow.closest('tr').remove();
    }
    
    // Hapus pesan "Pilih kebun terlebih dahulu" jika ada (Mobile)
    const emptyMobile = mobileContainer.querySelector('.text-center');
    if (emptyMobile) {
        emptyMobile.remove();
    }
    
    // Cek apakah row sudah ada
    const existingRow = tbody.querySelector(`tr[data-kebun="${namaKebun}"]`);
    if (existingRow) return;
    
    // Buat row baru untuk desktop
    const newRow = document.createElement('tr');
    newRow.dataset.kebun = namaKebun;
    newRow.innerHTML = `
        <td class="align-middle">${namaKebun}</td>
        <td>
            <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="number" class="form-control" value="1800" onchange="hitungSubtotal(this)">
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="number" class="form-control" value="6000" onchange="hitungSubtotal(this)">
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="text" class="form-control form-control-solid subtotal-biaya" value="147800" readonly>
            </div>
        </td>
    `;
    tbody.appendChild(newRow);
    
    // Buat card baru untuk mobile
    const mobileCard = document.createElement('div');
    mobileCard.className = 'card border mb-3';
    mobileCard.dataset.kebun = namaKebun;
    mobileCard.innerHTML = `
        <div class="card-body">
            <h6 class="fw-bold mb-3">DATA</h6>
            
            <div class="row mb-2">
                <div class="col-5 text-muted">Nama Kebun</div>
                <div class="col-7 fw-semibold">${namaKebun}</div>
            </div>
            
            <div class="row mb-2">
                <div class="col-5 text-muted">Harga PPH</div>
                <div class="col-7">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" value="1800" onchange="hitungSubtotalMobile(this)">
                    </div>
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-5 text-muted">Harga PPBKB</div>
                <div class="col-7">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" value="6000" onchange="hitungSubtotalMobile(this)">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-5 text-muted">Subtotal</div>
                <div class="col-7">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control form-control-solid subtotal-biaya-mobile" value="147800" readonly>
                    </div>
                </div>
            </div>
        </div>
    `;
    mobileContainer.appendChild(mobileCard);
}

function hapusRowBiayaLain(namaKebun) {
    const tbody = document.getElementById('tbody_biaya_lain');
    const mobileContainer = document.getElementById('mobile_biaya_lain');
    
    // Hapus row desktop
    const row = tbody.querySelector(`tr[data-kebun="${namaKebun}"]`);
    if (row) {
        row.remove();
    }
    
    // Hapus card mobile
    const mobileCard = mobileContainer.querySelector(`div[data-kebun="${namaKebun}"]`);
    if (mobileCard) {
        mobileCard.remove();
    }
    
    // Jika tidak ada row lagi, tampilkan pesan (Desktop)
    if (tbody.children.length === 0) {
        tbody.innerHTML = `
            <tr>
                <td colspan="4" class="text-center text-muted">
                    <em>Pilih kebun terlebih dahulu untuk menampilkan form biaya</em>
                </td>
            </tr>
        `;
    }
    
    // Jika tidak ada card lagi, tampilkan pesan (Mobile)
    if (mobileContainer.children.length === 0) {
        mobileContainer.innerHTML = `
            <div class="text-center text-muted py-3">
                <em>Pilih kebun terlebih dahulu untuk menampilkan form biaya</em>
            </div>
        `;
    }
}

function hitungSubtotal(input) {
    const row = input.closest('tr');
    const inputs = row.querySelectorAll('input[type="number"]');
    const pph = parseFloat(inputs[0].value) || 0;
    const ppbkb = parseFloat(inputs[1].value) || 0;
    const subtotal = pph + ppbkb;
    
    row.querySelector('.subtotal-biaya').value = subtotal.toLocaleString('id-ID');
}

function hitungSubtotalMobile(input) {
    const card = input.closest('.card-body');
    const inputs = card.querySelectorAll('input[type="number"]');
    const pph = parseFloat(inputs[0].value) || 0;
    const ppbkb = parseFloat(inputs[1].value) || 0;
    const subtotal = pph + ppbkb;
    
    card.querySelector('.subtotal-biaya-mobile').value = subtotal.toLocaleString('id-ID');
}

let uploadedFiles = [];

function handleFileUpload(input) {
    const files = Array.from(input.files);
    
    files.forEach(file => {
        // Validasi ukuran file (max 25 MB)
        if (file.size > 25 * 1024 * 1024) {
            alert(`File ${file.name} terlalu besar. Maksimal 25 MB.`);
            return;
        }
        
        // Validasi tipe file
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf', 
                             'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                             'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
        
        if (!allowedTypes.includes(file.type)) {
            alert(`File ${file.name} tidak didukung. Hanya pdf, doc, xls, jpg, png yang diperbolehkan.`);
            return;
        }
        
        // Tambahkan file ke array
        uploadedFiles.push(file);
        
        // Buat preview
        createFilePreview(file, uploadedFiles.length - 1);
    });
    
    // Reset input
    input.value = '';
}

// Drag & Drop functionality
document.addEventListener('DOMContentLoaded', function() {
    const uploadArea = document.getElementById('upload_area');
    
    if (uploadArea) {
        // Prevent default drag behaviors
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, preventDefaults, false);
            document.body.addEventListener(eventName, preventDefaults, false);
        });
        
        // Highlight drop area when item is dragged over it
        ['dragenter', 'dragover'].forEach(eventName => {
            uploadArea.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, unhighlight, false);
        });
        
        // Handle dropped files
        uploadArea.addEventListener('drop', handleDrop, false);
    }
    
    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }
    
    function highlight(e) {
        uploadArea.classList.add('border-success', 'bg-light-success');
    }
    
    function unhighlight(e) {
        uploadArea.classList.remove('border-success', 'bg-light-success');
    }
    
    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        
        const fileInput = document.getElementById('file_brosur');
        fileInput.files = files;
        handleFileUpload(fileInput);
    }
});

function createFilePreview(file, index) {
    const container = document.getElementById('file_preview_container');
    
    // Tentukan icon berdasarkan tipe file
    let iconClass = 'la-file';
    let iconColor = 'text-secondary';
    let canPreview = false;
    
    if (file.type.includes('image')) {
        iconClass = 'la-image';
        iconColor = 'text-purple';
        canPreview = true;
    } else if (file.type.includes('pdf')) {
        iconClass = 'la-file-pdf';
        iconColor = 'text-danger';
        canPreview = true;
    } else if (file.type.includes('word')) {
        iconClass = 'la-file-word';
        iconColor = 'text-primary';
    } else if (file.type.includes('excel') || file.type.includes('spreadsheet')) {
        iconClass = 'la-file-excel';
        iconColor = 'text-success';
    }
    
    // Format ukuran file
    const fileSize = (file.size / (1024 * 1024)).toFixed(2);
    
    // Format tanggal
    const date = new Date();
    const formattedDate = date.toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' });
    
    // Buat item preview
    const fileItem = document.createElement('div');
    fileItem.className = 'border rounded p-3 mb-2 bg-white position-relative';
    fileItem.dataset.fileIndex = index;
    
    const previewButton = canPreview ? `
        <button type="button" class="btn btn-sm btn-light-success me-2" onclick="previewFile(${index})" title="Preview">
            <i class="las la-eye"></i>
        </button>
    ` : '';
    
    fileItem.innerHTML = `
        <div class="d-flex align-items-center">
            <div class="me-3 file-thumbnail-container" id="thumbnail_${index}">
                <i class="las ${iconClass} fs-1 ${iconColor}"></i>
            </div>
            <div class="flex-grow-1">
                <h6 class="mb-0 text-truncate" style="max-width: 500px;" title="${file.name}">${file.name}</h6>
                <small class="text-muted">${fileSize} MB • ${formattedDate}</small>
            </div>
            <div>
                ${previewButton}
                <button type="button" class="btn btn-sm btn-danger" onclick="removeFile(${index})">
                    <i class="las la-times"></i>
                </button>
            </div>
        </div>
    `;
    
    container.appendChild(fileItem);
    
    // Generate thumbnail untuk gambar
    if (file.type.includes('image')) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const thumbnailContainer = document.getElementById(`thumbnail_${index}`);
            if (thumbnailContainer) {
                thumbnailContainer.innerHTML = `
                    <img src="${e.target.result}" 
                         class="rounded" 
                         style="width: 60px; height: 60px; object-fit: cover; cursor: pointer;" 
                         onclick="previewFile(${index})"
                         alt="${file.name}">
                `;
            }
        };
        reader.readAsDataURL(file);
    }
}

function previewFile(index) {
    const file = uploadedFiles[index];
    if (!file) return;
    
    const reader = new FileReader();
    
    reader.onload = function(e) {
        const fileURL = e.target.result;
        let previewContent = '';
        
        if (file.type.includes('image')) {
            previewContent = `
                <div class="text-center">
                    <img src="${fileURL}" class="img-fluid" style="max-height: 70vh; max-width: 100%;" alt="${file.name}">
                </div>
            `;
        } else if (file.type.includes('pdf')) {
            previewContent = `
                <iframe src="${fileURL}" style="width: 100%; height: 70vh; border: none;"></iframe>
            `;
        }
        
        // Buat modal preview
        const modalHTML = `
            <div class="modal fade" id="filePreviewModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-white">
                                <i class="las la-file-alt me-2"></i>${file.name}
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            ${previewContent}
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <div class="text-muted small">
                                <i class="las la-info-circle"></i> Ukuran: ${(file.size / (1024 * 1024)).toFixed(2)} MB
                            </div>
                            <div>
                                <button type="button" class="btn btn-light-success me-2" onclick="downloadFile(${index})">
                                    <i class="las la-download"></i> Download
                                </button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        // Hapus modal lama jika ada
        const oldModal = document.getElementById('filePreviewModal');
        if (oldModal) {
            oldModal.remove();
        }
        
        // Tambahkan modal baru
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        
        // Tampilkan modal
        const modal = new bootstrap.Modal(document.getElementById('filePreviewModal'));
        modal.show();
        
        // Hapus modal dari DOM setelah ditutup
        document.getElementById('filePreviewModal').addEventListener('hidden.bs.modal', function() {
            this.remove();
        });
    };
    
    reader.readAsDataURL(file);
}

function downloadFile(index) {
    const file = uploadedFiles[index];
    if (!file) return;
    
    const url = URL.createObjectURL(file);
    const a = document.createElement('a');
    a.href = url;
    a.download = file.name;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}

function removeFile(index) {
    // Hapus dari array
    uploadedFiles.splice(index, 1);
    
    // Hapus preview
    const container = document.getElementById('file_preview_container');
    const fileItem = container.querySelector(`[data-file-index="${index}"]`);
    if (fileItem) {
        fileItem.remove();
    }
    
    // Update index untuk item yang tersisa
    const remainingItems = container.querySelectorAll('[data-file-index]');
    remainingItems.forEach((item, newIndex) => {
        item.dataset.fileIndex = newIndex;
        const removeBtn = item.querySelector('button');
        removeBtn.setAttribute('onclick', `removeFile(${newIndex})`);
    });
}

function openModalGudang(button, namaKebun) {
    currentButtonGudang = button;
    
    // Set nama kebun di modal
    document.getElementById('modal_nama_kebun').textContent = namaKebun;
    
    // Reset semua pilihan gudang
    document.querySelectorAll('.gudang-item').forEach(item => {
        item.classList.remove('border-success', 'bg-light');
        item.querySelector('.check-icon').style.display = 'none';
    });
    
    // Tampilkan modal
    const modal = new bootstrap.Modal(document.getElementById('modalPilihGudang'));
    modal.show();
}

function selectGudang(element, gudangNama, gudangAlamat, jarak) {
    // Reset semua pilihan
    document.querySelectorAll('.gudang-item').forEach(item => {
        item.classList.remove('border-success', 'bg-light');
        item.querySelector('.check-icon').style.display = 'none';
    });
    
    // Set pilihan yang dipilih
    element.classList.add('border-success', 'bg-light');
    element.querySelector('.check-icon').style.display = 'block';
    
    // Simpan data gudang yang dipilih
    element.dataset.selected = 'true';
    element.dataset.gudangNama = gudangNama;
    element.dataset.gudangAlamat = gudangAlamat;
    element.dataset.jarak = jarak;
}

function simpanPilihanGudang() {
    const selectedGudang = document.querySelector('.gudang-item[data-selected="true"]');
    
    if (selectedGudang && currentButtonGudang) {
        const gudangNama = selectedGudang.dataset.gudangNama;
        const jarak = selectedGudang.dataset.jarak;
        
        // Update button text
        currentButtonGudang.querySelector('.gudang-text').textContent = `${gudangNama} • ${jarak}`;
        
        // Tutup modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('modalPilihGudang'));
        modal.hide();
    }
}

function tambahGudangBaru() {
    // Tutup modal pilih gudang
    const modalPilih = bootstrap.Modal.getInstance(document.getElementById('modalPilihGudang'));
    if (modalPilih) {
        modalPilih.hide();
    }
    
    // Buka modal tambah gudang
    const modalTambah = new bootstrap.Modal(document.getElementById('modalTambahGudang'));
    modalTambah.show();
}

function simpanGudangBaru() {
    // Logic untuk menyimpan gudang baru
    const namaGudang = document.getElementById('nama_gudang').value;
    const alamatGudang = document.getElementById('alamat_gudang').value;
    const kotaGudang = document.getElementById('kota_gudang').value;
    const provinsiGudang = document.getElementById('provinsi_gudang').value;
    const kodePosGudang = document.getElementById('kode_pos_gudang').value;
    
    console.log('Gudang baru:', {namaGudang, alamatGudang, kotaGudang, provinsiGudang, kodePosGudang});
    
    // Tutup modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('modalTambahGudang'));
    modal.hide();
    
    // Reset form
    document.getElementById('formTambahGudang').reset();
}

function batalTambahGudang() {
    // Tutup modal tambah gudang
    const modalTambah = bootstrap.Modal.getInstance(document.getElementById('modalTambahGudang'));
    if (modalTambah) {
        modalTambah.hide();
    }
    
    // Buka kembali modal pilih gudang
    setTimeout(() => {
        const modalPilih = new bootstrap.Modal(document.getElementById('modalPilihGudang'));
        modalPilih.show();
    }, 300);
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    toggleStatusPermintaan();
    toggleTabelSpesifikasi();
    hitungIndent();
});
</script>

<!-- Modal Pilih Alamat Pengiriman -->
<div class="modal fade" id="modalPilihGudang" tabindex="-1" aria-labelledby="modalPilihGudangLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalPilihGudangLabel">Pilih Alamat Pengiriman</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted">Pilih salah satu alamat yang sudah terdaftar untuk menghitung jarak ke lokasi kebun <strong id="modal_nama_kebun"></strong></p>
                
                <!-- Gudang A -->
                <div class="border rounded p-3 mb-3 gudang-item position-relative" style="cursor: pointer;" onclick="selectGudang(this, 'Gudang A', 'Jl. Merdeka No. 123, Medan', '10.5 km')" data-gudang-nama="Gudang A" data-gudang-alamat="Jl. Merdeka No. 123, Medan" data-jarak="10.5 km">
                    <div class="position-absolute top-0 end-0 m-2 check-icon" style="display: none;">
                        <i class="las la-check-circle text-success fs-2"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="fw-bold mb-1">
                                <i class="las la-map-marker-alt text-success"></i> Gudang A
                            </h6>
                            <p class="text-muted mb-0 small">
                                <i class="las la-map"></i> Jl. Merdeka No. 123, Medan
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Gudang B -->
                <div class="border rounded p-3 mb-3 gudang-item position-relative" style="cursor: pointer;" onclick="selectGudang(this, 'Gudang B', 'Jl. Sudirman No. 45, Sei Miring', '4.09 km')" data-gudang-nama="Gudang B" data-gudang-alamat="Jl. Sudirman No. 45, Sei Miring" data-jarak="4.09 km">
                    <div class="position-absolute top-0 end-0 m-2 check-icon" style="display: none;">
                        <i class="las la-check-circle text-success fs-2"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="fw-bold mb-1">
                                <i class="las la-map-marker-alt text-success"></i> Gudang B
                            </h6>
                            <p class="text-muted mb-0 small">
                                <i class="las la-map"></i> Jl. Sudirman No. 45, Sei Miring
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Gudang C -->
                <div class="border rounded p-3 mb-3 gudang-item position-relative" style="cursor: pointer;" onclick="selectGudang(this, 'Gudang C', 'Jl. Raya Bogor KM 20, Marwan', '35.4 km')" data-gudang-nama="Gudang C" data-gudang-alamat="Jl. Raya Bogor KM 20, Marwan" data-jarak="35.4 km">
                    <div class="position-absolute top-0 end-0 m-2 check-icon" style="display: none;">
                        <i class="las la-check-circle text-success fs-2"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="fw-bold mb-1">
                                <i class="las la-map-marker-alt text-success"></i> Gudang C
                            </h6>
                            <p class="text-muted mb-0 small">
                                <i class="las la-map"></i> Jl. Raya Bogor KM 20, Marwan
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tambah Gudang Baru -->
                <div class="border border-success rounded p-3 text-center" style="cursor: pointer;" onclick="tambahGudangBaru()">
                    <i class="las la-plus-circle text-success fs-1"></i>
                    <p class="text-success fw-bold mb-0">Tambah Gudang Baru</p>
                    <small class="text-muted">Klik untuk menambahkan alamat pengiriman baru</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-success" onclick="simpanPilihanGudang()">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Gudang Baru -->
<div class="modal fade" id="modalTambahGudang" tabindex="-1" aria-labelledby="modalTambahGudangLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalTambahGudangLabel">Tambah Gudang Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted mb-4">Tambah alamat gudang pengiriman Anda</p>
                
                <form id="formTambahGudang">
                    <div class="mb-3">
                        <label class="form-label">Nama Divisi/Lokasi <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama_gudang" placeholder="Contoh: Div A, Kantor Pusat, Gudang 1">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="alamat_gudang" rows="3" placeholder="Contoh: Jl. Merdeka No. 123, RT 01/RW 02"></textarea>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Kota/Kabupaten <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="kota_gudang" placeholder="Contoh: Medan">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Provinsi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="provinsi_gudang" placeholder="Contoh: Sumatera Utara">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="kode_pos_gudang" placeholder="Contoh: 20111">
                    </div>

                    <div class="alert alert-info d-flex align-items-center">
                        <i class="las la-info-circle fs-2 me-2"></i>
                        <small>Gunakan Lokasi Saat Ini</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="batalTambahGudang()">Batal</button>
                <button type="button" class="btn btn-success" onclick="simpanGudangBaru()">Simpan</button>
            </div>
        </div>
    </div>
</div>

    <!-- Kebun ditawarkan -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3 required">Biaya Transport</h6>

            <!-- Desktop Table View -->
            <div class="table-responsive d-none d-md-block">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Pilih</th>
                            <th>Nama Kebun</th>
                            <th>Qty Permintaan</th>
                            <th class="required">Lokasi Gudang</th>
                            <th class="required">Harga Barang (+Transport) </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-kebun="Bangun Bandar">
                            <td><input type="checkbox" class="form-check-input kebun-checkbox" onchange="toggleKebunRow(this)"></td>
                            <td>Bangun Bandar</td>
                            <td>10 KG</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-light btn-pilih-gudang" onclick="openModalGudang(this, 'Bangun Bandar')" disabled>
                                    <i class="las la-map-marker"></i> <span class="gudang-text">Pilih Gudang</span>
                                </button>
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control harga-transport" value="0" disabled>
                                </div>
                            </td>
                        </tr>

                        <tr data-kebun="Tanah Gambus">
                            <td><input type="checkbox" class="form-check-input kebun-checkbox" onchange="toggleKebunRow(this)"></td>
                            <td>Tanah Gambus</td>
                            <td>10 KG</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-light btn-pilih-gudang" onclick="openModalGudang(this, 'Tanah Gambus')" disabled>
                                    <i class="las la-map-marker"></i> <span class="gudang-text">Pilih Gudang</span>
                                </button>
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control harga-transport" value="30000" disabled>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="d-md-none">
                <!-- Card Item 1 -->
                <div class="card border mb-3" data-kebun="Bangun Bandar">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0 fw-bold">DATA</h6>
                            <input type="checkbox" class="form-check-input kebun-checkbox" onchange="toggleKebunRow(this)" style="width: 20px; height: 20px;">
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-5 text-muted">No</div>
                            <div class="col-7 fw-semibold">1</div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-5 text-muted">Nama Kebun</div>
                            <div class="col-7 fw-semibold">Bangun Bandar</div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-5 text-muted">Qty Permintaan</div>
                            <div class="col-7 fw-semibold">10 KG</div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-5 text-muted">Lokasi Gudang</div>
                            <div class="col-7">
                                <button type="button" class="btn btn-sm btn-light btn-pilih-gudang w-100" onclick="openModalGudang(this, 'Bangun Bandar')" disabled>
                                    <i class="las la-map-marker"></i> <span class="gudang-text">Pilih Gudang</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-5 text-muted">Harga Barang</div>
                            <div class="col-7">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control harga-transport" value="0" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Item 2 -->
                <div class="card border mb-3" data-kebun="Tanah Gambus">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0 fw-bold">DATA</h6>
                            <input type="checkbox" class="form-check-input kebun-checkbox" onchange="toggleKebunRow(this)" style="width: 20px; height: 20px;">
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-5 text-muted">No</div>
                            <div class="col-7 fw-semibold">2</div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-5 text-muted">Nama Kebun</div>
                            <div class="col-7 fw-semibold">Tanah Gambus</div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-5 text-muted">Qty Permintaan</div>
                            <div class="col-7 fw-semibold">10 KG</div>
                        </div>
                        
                        <div class="row mb-2">
                            <div class="col-5 text-muted">Lokasi Gudang</div>
                            <div class="col-7">
                                <button type="button" class="btn btn-sm btn-light btn-pilih-gudang w-100" onclick="openModalGudang(this, 'Tanah Gambus')" disabled>
                                    <i class="las la-map-marker"></i> <span class="gudang-text">Pilih Gudang</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-5 text-muted">Harga Barang</div>
                            <div class="col-7">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control harga-transport" value="30000" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Harga Lain Lain -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3">Harga Lain Lain</h6>

            <div class="p-3 bg-light rounded">
                <p class="text-muted mb-3">Input biaya transportasi, PPH, dan PPBKB untuk setiap kebun yang dipilih</p>

                <!-- Desktop Table View -->
                <div class="table-responsive d-none d-md-block">
                    <table class="table table-bordered align-middle bg-white">
                        <thead class="table-light">
                            <tr>
                                <th>NAMA KEBUN</th>
                                <th>HARGA PPH</th>
                                <th>HARGA PPBKB</th>
                                <th>SUBTOTAL</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_biaya_lain">
                            <!-- Rows akan ditambahkan secara dinamis berdasarkan kebun yang diceklis -->
                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    <em>Pilih kebun terlebih dahulu untuk menampilkan form biaya</em>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card View -->
                <div class="d-md-none" id="mobile_biaya_lain">
                    <div class="text-center text-muted py-3">
                        <em>Pilih kebun terlebih dahulu untuk menampilkan form biaya</em>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Harga dasar -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3">Harga Dasar</h6>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label required">Mata Uang</label>
                    <select class="form-control">
                        <option>IDR (Indonesian Rupiah)</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label required">Harga Satuan (per KG)</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control" value="0">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label required">Masa Berlaku Harga</label>
                <input type="date" class="form-control" value="2025-10-27">
            </div>
        </div>
    </div>

    <!-- Ringkasan Penawaran -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-4">Ringkasan Penawaran</h6>

            <div class="row">
                <!-- Ringkasan Pengiriman -->
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h6 class="fw-bold text-success mb-3">Ringkasan Pengiriman</h6>
                        
                        <div class="alert alert-success d-flex align-items-start mb-3">
                            <i class="las la-check-circle fs-2 me-2"></i>
                            <div>
                                <strong>Sempurna!</strong> Penawaran Anda memenuhi 100% dari total permintaan.
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Total Permintaan (Socfindo)</span>
                            <strong>110 KG</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Target Supply Anda</span>
                            <strong>110 KG</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Total Kebun</span>
                            <strong>11 Kebun</strong>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span>Selisih</span>
                            <strong class="text-success">0 KG</strong>
                        </div>

                        <div class="mb-2">
                            <small class="text-muted">Persentase Terpenuhi</small>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    100.0%
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <small class="text-success fw-bold">Penuh Terpenuhi</small>
                        </div>
                    </div>
                </div>

                <!-- Ringkasan Supply Mode -->
                <div class="col-md-6">
                    <div class="p-3 bg-light rounded">
                        <h6 class="fw-bold text-success mb-3">Ringkasan Supply Mode</h6>
                        
                        <table class="table table-sm table-borderless mb-0">
                            <thead>
                                <tr>
                                    <th>Mode</th>
                                    <th class="text-end">Sesuai Permintaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ready Stock</td>
                                    <td class="text-end"><strong>110 KG (100%)</strong></td>
                                </tr>
                                <tr>
                                    <td>Indent</td>
                                    <td class="text-end"><strong>0 KG (0%)</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <!-- Ringkasan Biaya -->
            <div class="p-3 bg-light rounded">
                <h6 class="fw-bold mb-3">Ringkasan Biaya</h6>
                
                <div class="d-flex justify-content-between mb-2">
                    <span>Total Harga Barang</span>
                    <strong>Rp 16.500.000</strong>
                </div>
                
                <div class="d-flex justify-content-between mb-3">
                    <span>Total Harga Transportasi (Kebun Terpilih)</span>
                    <strong>Rp 238.000</strong>
                </div>

                <hr>

                <div class="d-flex justify-content-between">
                    <h5 class="fw-bold text-success mb-0">Total Harga Keseluruhan</h5>
                    <h5 class="fw-bold text-success mb-0">Rp 16.738.000</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Tambahan -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3">Informasi Tambahan</h6>

            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea class="form-control" rows="3" placeholder="Keterangan"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">File Brosur <span class="text-danger">*</span></label>
                <div id="upload_area" class="border rounded p-4 text-center bg-light" style="cursor: pointer;" onclick="document.getElementById('file_brosur').click()">
                    <i class="las la-image fs-1 text-muted"></i>
                    <p class="mb-0 mt-2">
                        <span class="text-success fw-bold">Drop file or Browse</span>
                    </p>
                    <small class="text-muted">Format: pdf, doc, xls, jpg, png. Max Size: 25 MB</small>
                    <input type="file" id="file_brosur" class="d-none" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png" onchange="handleFileUpload(this)" multiple>
                </div>
                
                <!-- Preview Files -->
                <div id="file_preview_container" class="row g-3 mt-2"></div>
            </div>
        </div>
    </div>

    <!-- Dibuat Oleh -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <label class="form-label fw-bold">Dibuat Oleh <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="M. Farhan Kristianda" value="M. Farhan Kristianda">
        </div>
    </div>

    <!-- Actions -->
    <div class="text-end mt-4 mb-3 mx-10">
        <button class="btn btn-secondary px-5 me-2">Kembali</button>
        <button class="btn btn-success px-5">Simpan</button>
    </div>

</div>
