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
          
            <div class="row g-3">
              <div class="col-md-6">
                    <label class="form-label text-muted">Kode Jasa</label>
                    <p class="fw-semibold">Pupuk - 001</p>
                </div>
               
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label text-muted">Nama Jasa</label>
                    <p class="fw-semibold">NPK 15-15-6-4</p>
                </div>
            </div>

            <label class="form-label text-muted mt-3">Deskripsi</label>
            <p>MAT: CAST STEEL<br>Diperlukan untuk : HYDROCYCLONE</p>
        </div>
    </div>

    <!-- Card Spesifikasi -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3">Spesifikasi Kebutuhan Kandungan Unsur Hara</h6>

            <div class="table-responsive">
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

            <div class="alert alert-success mt-3">
                Spesifikasi mengikuti permintaan Socfindo seperti tercantum pada tabel di atas.
            </div>
        </div>
    </div>

    <!-- Kebun ditawarkan -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3">Spesifikasi Kebun yang Ditawarkan</h6>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Pilih</th>
                            <th>Nama Kebun</th>
                            <th>Qty Permintaan</th>
                            <th>Lokasi Gudang</th>
                            <th>Harga Transport</th>
                            <th>Qty Penawaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>Bangun Bandar</td>
                            <td>10 KG</td>
                            <td>Gudang B • 4.09 km</td>
                            <td><input type="number" class="form-control form-control-sm" value="0"></td>
                            <td><input type="number" class="form-control form-control-sm" value="0"></td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>Tanah Gambus</td>
                            <td>10 KG</td>
                            <td>Gudang B • 35.4 km</td>
                            <td><input type="number" class="form-control form-control-sm" value="30000"></td>
                            <td><input type="number" class="form-control form-control-sm" value="0"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Harga dasar -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
            <h6 class="fw-bold mb-3">Harga Dasar</h6>

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Mata Uang</label>
                    <select class="form-control form-control-sm">
                        <option>IDR (Indonesian Rupiah)</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Harga Satuan (per KG)</label>
                    <input type="number" class="form-control form-control-sm" value="0">
                </div>
            </div>

            <label class="form-label mt-3">Masa Berlaku Harga</label>
            <input type="date" class="form-control form-control-sm" value="2025-10-27">
        </div>
    </div>

    <!-- Ringkasan -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">

            <h6 class="fw-bold mb-3">Ringkasan Penawaran</h6>

            <div class="alert alert-success">
                ✔ Sempurna! Penawaran memenuhi 100% dari total permintaan.
            </div>

            <div class="d-flex justify-content-between">
                <span>Ready Stock</span>
                <strong>110 KG (100%)</strong>
            </div>

            <div class="d-flex justify-content-between">
                <span>Indent</span>
                <strong>0 KG (0%)</strong>
            </div>

            <hr>

            <h6 class="fw-bold">Ringkasan Biaya</h6>
            <div class="d-flex justify-content-between"><span>Total Harga Barang</span><strong>Rp 16.500.000</strong></div>
            <div class="d-flex justify-content-between"><span>Total Harga Transportasi</span><strong>Rp 238.000</strong></div>
            <div class="d-flex justify-content-between mt-2 fs-5">
                <span><strong>Total Keseluruhan</strong></span>
                <strong>Rp 16.738.000</strong>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="text-end mt-3">
        <button class="btn btn-secondary px-5">Kembali</button>
        <button class="btn btn-success px-5">Simpan</button>
    </div>

</div>
