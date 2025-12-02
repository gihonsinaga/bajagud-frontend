<?php
// filepath: d:\developments\php\baraguddevelopment\application\modules\material\views\list.php
?>

<div class="card shadow-sm">
    <div class="card-header bg-success">
        <h3 class="card-title text-white"><?php echo $title; ?></h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-bg-white btn-icon" onclick="return KTDataTables.init();">
                <i class="las la-sync fs-1 text-primary"></i>
            </button>
            &nbsp;
            <button type="button" class="btn btn-sm btn-bg-white" id="btn_add_material">
                <i class="bi bi-plus-circle"></i> Tambah Material
            </button>
        </div>
    </div>
    <div class="card-body">
        <table id="kt_datatable_material" class="align-middle table table-row-bordered gy-5">
            <thead>
                <tr class="fw-bold fs-6 text-muted">
                    <th class="min-w-30px text-center">No.</th>
                    <th class="min-w-80px text-center">Kode Material</th>
                    <th class="min-w-200px text-center">Nama Material</th>
                    <th class="min-w-80px text-center">Kategori</th>
                    <th class="min-w-50px text-center">Satuan</th>
                    <th class="min-w-80px text-center">Stok</th>
                    <th class="min-w-100px text-center">Harga</th>
                    <th class="min-w-50px text-center">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- Modal Tambah/Edit Material -->
<div class="modal fade" tabindex="-1" id="kt_modal_material" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="modal_material_title">Tambah Material Baru</h5>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-light ms-2" data-kt-material-modal-action="close" aria-label="Close">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"></rect>
                                <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"></rect>
                            </g>
                        </svg>
                    </span>
                </div>
                <!--end::Close-->
            </div>

            <form id="kt_modal_material_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                <input type="hidden" name="id" id="material_id">
                <input type="hidden" name="action" id="material_action" value="add">

                <!--begin::Modal body-->
                <div class="modal-body py-4 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_material_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_material_header" data-kt-scroll-wrappers="#kt_modal_material_scroll" data-kt-scroll-offset="300px" style="max-height: 400px;">

                        <!--Begin::Input Group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Kode Material</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="kode_material" class="form-control form-control-solid" placeholder="Masukkan kode material" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input Group-->

                        <!--Begin::Input Group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Material</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="nama_material" class="form-control form-control-solid" placeholder="Masukkan nama material" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input Group-->

                        <!--Begin::Input Group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Kategori</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <select name="kategori" class="form-control form-control-solid" required>
                                    <option value="">- Pilih Kategori -</option>
                                    <option value="Raw Material">Raw Material</option>
                                    <option value="Finished Good">Finished Good</option>
                                    <option value="Semi Finished">Semi Finished</option>
                                    <option value="Packaging">Packaging</option>
                                    <option value="Consumable">Consumable</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input Group-->

                        <!--Begin::Input Group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Satuan</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <select name="satuan" class="form-control form-control-solid" required>
                                    <option value="">- Pilih Satuan -</option>
                                    <option value="Pcs">Pcs</option>
                                    <option value="Kg">Kg</option>
                                    <option value="Liter">Liter</option>
                                    <option value="Meter">Meter</option>
                                    <option value="Box">Box</option>
                                    <option value="Unit">Unit</option>
                                    <option value="Set">Set</option>
                                </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input Group-->

                        <!--Begin::Input Group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Stok</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="number" name="stok" class="form-control form-control-solid" placeholder="0" required min="0" step="1">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input Group-->

                        <!--Begin::Input Group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Harga</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="harga" id="harga_input" class="form-control form-control-solid" placeholder="0" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input Group-->

                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->

                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" id="kt_modal_material_cancel" class="btn btn-light me-3">Tutup</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_material_submit" class="btn btn-primary">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    "use strict";

    var KTDataTables = (function() {
        var e;
        const loading = new KTBlockUI(document.querySelector(".card.shadow-sm"), {
            overlayClass: "bg-dark bg-opacity-10",
        });
        return {
            init: function() {
                e = $("#kt_datatable_material").DataTable({
                    processing: !0,
                    serverSide: !0,
                    destroy: !0,
                    scrollX: !0,
                    dom: "<'row'<'col-sm-12 col-md-12 col-lg-12'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-1'l><'col-sm-12 col-md-3'i><'col-sm-12 col-md-8'p>>",
                    paging: !0,
                    ordering: !0,
                    searching: !0,
                    ajax: {
                        type: "POST",
                        url: "<?php echo site_url('material/mm_list'); ?>",
                        dataSrc: function(json) {
                            console.log('Response:', json);
                            return json.data;
                        }
                    },
                    columns: [{
                            data: 'number',
                            className: 'text-center',
                            sortable: false,
                            searchable: false,
                            orderable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'kode_material',
                            className: 'text-center'
                        },
                        {
                            data: 'nama_material'
                        },
                        {
                            data: 'kategori',
                            className: 'text-center'
                        },
                        {
                            data: 'satuan',
                            className: 'text-center'
                        },
                        {
                            data: 'stok',
                            className: 'text-center',
                            render: function(data) {
                                return new Intl.NumberFormat('id-ID').format(data);
                            }
                        },
                        {
                            data: 'harga',
                            className: 'text-center',
                            render: function(data) {
                                return 'Rp. ' + new Intl.NumberFormat('id-ID').format(data);
                            }
                        },
                        {
                            data: 'actions',
                            className: 'text-center',
                            sortable: false,
                            searchable: false,
                            orderable: false
                        }
                    ],
                    lengthMenu: [
                        [5, 10, 15, 25, -1],
                        [5, 10, 15, 25, "All"]
                    ],
                    pageLength: 10,
                    order: [1, 'ASC']
                });
            }
        };
    })();

    var KTModalMaterial = (function() {
        var t, e, n, o, i, r, z;
        return {
            init: function() {
                r = document.querySelector("#kt_modal_material");

                if (r) {
                    i = new bootstrap.Modal(r);
                    o = document.querySelector("#kt_modal_material_form");
                    t = document.getElementById("kt_modal_material_submit");
                    e = document.getElementById("kt_modal_material_cancel");
                    z = document.querySelector('[data-kt-material-modal-action="close"]');

                    n = FormValidation.formValidation(o, {
                        fields: {
                            kode_material: {
                                validators: {
                                    notEmpty: {
                                        message: "Kode material tidak boleh kosong"
                                    }
                                }
                            },
                            nama_material: {
                                validators: {
                                    notEmpty: {
                                        message: "Nama material tidak boleh kosong"
                                    }
                                }
                            },
                            kategori: {
                                validators: {
                                    notEmpty: {
                                        message: "Kategori harus dipilih"
                                    }
                                }
                            },
                            satuan: {
                                validators: {
                                    notEmpty: {
                                        message: "Satuan harus dipilih"
                                    }
                                }
                            },
                            stok: {
                                validators: {
                                    notEmpty: {
                                        message: "Stok tidak boleh kosong"
                                    },
                                    numeric: {
                                        message: "Stok harus berupa angka"
                                    }
                                }
                            },
                            harga: {
                                validators: {
                                    notEmpty: {
                                        message: "Harga tidak boleh kosong"
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        },
                    });

                    // Submit button click
                    t.addEventListener("click", function(event) {
                        event.preventDefault();

                        if (n) {
                            n.validate().then(function(status) {
                                if (status == "Valid") {
                                    Swal.fire({
                                        text: "Pastikan data yang Anda isi sudah benar dan dapat dipertanggung jawabkan",
                                        icon: "warning",
                                        showCancelButton: true,
                                        buttonsStyling: false,
                                        confirmButtonText: "Ya, Simpan",
                                        cancelButtonText: "Kembali",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                            cancelButton: "btn btn-active-light"
                                        },
                                    }).then(function(result) {
                                        if (result.value) {
                                            // Get action (add or update)
                                            var action = $("#material_action").val();
                                            var url = action === 'edit' ?
                                                '<?php echo site_url("material/update"); ?>' :
                                                '<?php echo site_url("material/add"); ?>';

                                            // Get raw harga value (remove formatting)
                                            var hargaRaw = $("#harga_input").val().replace(/\./g, '').replace(/,/g, '');

                                            var formData = {
                                                id: $("#material_id").val(),
                                                kode_material: $("input[name=kode_material]").val(),
                                                nama_material: $("input[name=nama_material]").val(),
                                                kategori: $("select[name=kategori]").val(),
                                                satuan: $("select[name=satuan]").val(),
                                                stok: $("input[name=stok]").val(),
                                                harga: hargaRaw
                                            };

                                            $.ajax({
                                                type: 'POST',
                                                url: url,
                                                data: formData,
                                                dataType: 'json',
                                                beforeSend: function() {
                                                    t.setAttribute("data-kt-indicator", "on");
                                                    t.disabled = true;
                                                },
                                                success: function(response) {
                                                    t.removeAttribute("data-kt-indicator");
                                                    t.disabled = false;

                                                    Swal.fire({
                                                        text: response.message,
                                                        icon: response.status,
                                                        buttonsStyling: false,
                                                        confirmButtonText: "Tutup",
                                                        customClass: {
                                                            confirmButton: "btn btn-primary"
                                                        }
                                                    }).then(function(e) {
                                                        if (e.isConfirmed && response.status == 'success') {
                                                            // Reset form & close modal
                                                            n.resetForm(true);
                                                            o.reset();
                                                            $('#kt_modal_material').modal('hide');

                                                            // Reload DataTable
                                                            KTDataTables.init();
                                                        }
                                                    });
                                                },
                                                error: function(xhr, status, error) {
                                                    t.removeAttribute("data-kt-indicator");
                                                    t.disabled = false;

                                                    console.error('Error:', error);
                                                    console.log('Response:', xhr.responseText);

                                                    Swal.fire({
                                                        text: "Terjadi masalah koneksi: " + error,
                                                        icon: "error",
                                                        buttonsStyling: false,
                                                        confirmButtonText: "Tutup",
                                                        customClass: {
                                                            confirmButton: "btn btn-primary"
                                                        }
                                                    });
                                                }
                                            });
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        text: "Maaf, masih ada field yang kosong, silahkan diisi.",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Tutup",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        },
                                    });
                                }
                            });
                        }
                    });

                    // Cancel button click
                    e.addEventListener("click", function(event) {
                        event.preventDefault();
                        n.resetForm(true);
                        o.reset();
                        $('#kt_modal_material').modal('hide');
                    });

                    // Close X button click
                    z.addEventListener("click", function(event) {
                        event.preventDefault();
                        n.resetForm(true);
                        o.reset();
                        $('#kt_modal_material').modal('hide');
                    });
                }
            },
        };
    })();

    // Button Tambah Material
    $("#btn_add_material").on('click', function() {
        $("#modal_material_title").text("Tambah Material Baru");
        $("#material_action").val("add");
        $("#material_id").val("");
        $("#kt_modal_material_form")[0].reset();
        $("#harga_input").val('');

        $('#kt_modal_material').modal('show');
    });

    // Button Edit Material
    $(document).on('click', 'button[data-action="edit"]', function() {
        let id = $(this).data('id');

        $.ajax({
            url: '<?php echo site_url("material/edit"); ?>/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                if (!data.error) {
                    $("#modal_material_title").text("Edit Material");
                    $("#material_action").val("edit");
                    $("#material_id").val(data.id);
                    $("input[name=kode_material]").val(data.kode_material);
                    $("input[name=nama_material]").val(data.nama_material);
                    $("select[name=kategori]").val(data.kategori);
                    $("select[name=satuan]").val(data.satuan);
                    $("input[name=stok]").val(data.stok);

                    // Format harga dengan number formatting
                    var formattedHarga = new Intl.NumberFormat('id-ID').format(data.harga);
                    $("#harga_input").val(formattedHarga);

                    $('#kt_modal_material').modal('show');
                } else {
                    Swal.fire('Error!', data.error, 'error');
                }
            },
            error: function() {
                Swal.fire('Error!', 'Gagal mengambil data', 'error');
            }
        });
    });

    // Button Delete Material
    $(document).on('click', 'button[data-action="delete"]', function() {
        let id = $(this).data('id');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo site_url("material/delete"); ?>/' + id,
                    type: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire('Terhapus!', response.message, 'success');
                            KTDataTables.init();
                        } else {
                            Swal.fire('Error!', response.message, 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('Error!', 'Gagal menghapus data', 'error');
                    }
                });
            }
        });
    });

    KTUtil.onDOMContentLoaded((function() {
        KTDataTables.init();
        KTModalMaterial.init();

        // Format harga input on keyup
        $("#harga_input").on('keyup', function() {
            var value = $(this).val().replace(/\./g, '').replace(/,/g, '');
            if (value && !isNaN(value)) {
                var formatted = new Intl.NumberFormat('id-ID').format(value);
                $(this).val(formatted);
            }
        });

        // Prevent form submission on Enter key
        $("#kt_modal_material_form").on('keypress', function(e) {
            if (e.which === 13) {
                e.preventDefault();
                return false;
            }
        });
    }));
</script>