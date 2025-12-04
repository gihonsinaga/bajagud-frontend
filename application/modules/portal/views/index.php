<?php
// filepath: d:\developments\php\baraguddevelopment\application\modules\portal\views\index.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $title; ?> - PT SOCFIN INDONESIA</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/media/logos/favicon.ico'); ?>" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <!-- CSS Plugins -->
    <link href="<?php echo base_url('assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body id="kt_body" class="app-blank bg-light">

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('<?php echo base_url('assets/media/auth/bg4.jpg'); ?>');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }

            [data-bs-theme="dark"] body {
                background-image: url('<?php echo base_url('assets/media/auth/bg4-dark.jpg'); ?>');
            }
        </style>
        <!--end::Page bg image-->

        <!--begin::Portal-->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-100 p-10 order-2 order-lg-1">

                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">

                    <!--begin::Wrapper-->
                    <div class="w-lg-1000px p-10">

                        <!-- Logo & Company Name -->
                        <div class="text-center mb-11">
                            <img src="<?php echo base_url('assets/media/logos/Socfindo-Logo.svg'); ?>"
                                class="h-90px mb-5" alt="Logo" />
                        </div>

                        <!-- Header -->
                        <!-- <div class="text-center mb-10">
                            <h2 class="text-dark fw-bolder mb-3">
                                Selamat Datang, <?php echo $nama; ?>!
                            </h2>
                            <div class="text-gray-500 fw-semibold fs-5">
                                Silahkan pilih portal yang ingin Anda akses
                            </div>
                        </div> -->

                        <!-- Portal Cards -->
                        <div class="row g-6 g-xl-9 mb-10 justify-content-center">
                            <?php if (!empty($portals)): ?>
                                <?php foreach ($portals as $portal): ?>
                                    <div class="col-md-6 col-lg-4">
                                        <a href="<?php echo $portal['url']; ?>" class="card-portal-link">
                                            <div class="card card-portal bg-white h-100 shadow-sm hover-elevate-up border border-2 border-<?php echo $portal['color']; ?> border-hover">
                                                <div class="card-body text-center p-9">

                                                    <!-- Icon -->
                                                    <div class="mb-7">
                                                        <div class="symbol symbol-75px">
                                                            <div class="symbol-label bg-light-<?php echo $portal['color']; ?>">
                                                                <i class="<?php echo $portal['icon']; ?> fs-2x text-<?php echo $portal['color']; ?>"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Title -->
                                                    <h3 class="fw-bold text-gray-800 mb-3">
                                                        <?php echo $portal['name']; ?>
                                                    </h3>

                                                    <!-- Description -->
                                                    <p class="text-gray-600 fs-6 fw-semibold mb-7">
                                                        <?php echo $portal['description']; ?>
                                                    </p>

                                                    <!-- Badge -->
                                                    <span class="badge badge-<?php echo $portal['color']; ?> badge-lg">
                                                        Akses Portal
                                                        <i class="bi bi-arrow-right ms-1"></i>
                                                    </span>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-12">
                                    <div class="alert alert-warning text-center py-10">
                                        <div class="mb-5">
                                            <i class="bi bi-exclamation-triangle fs-5x text-warning"></i>
                                        </div>
                                        <h3 class="fw-bold mb-3">Tidak Ada Portal Tersedia</h3>
                                        <p class="text-muted fs-5 mb-5">
                                            Anda belum memiliki akses ke portal manapun.<br>
                                            Silahkan hubungi administrator untuk informasi lebih lanjut.
                                        </p>
                                        <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-warning">
                                            <i class="bi bi-box-arrow-left me-2"></i>
                                            Kembali ke Login
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- User Info Card -->
                        <div class="card bg-white shadow-sm mb-5">
                            <div class="card-body">
                                <div class="d-flex flex-stack flex-wrap">
                                    <div class="d-flex align-items-center me-5">
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light-primary">
                                                <i class="bi bi-person-circle fs-2x text-primary"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1"><?php echo $nama; ?></h5>
                                            <div class="text-muted fs-7">
                                                <i class="bi bi-building me-1"></i>
                                                Vendor: <?php echo $kode_vendor; ?>
                                                <?php if ($email): ?>
                                                    <span class="ms-3">
                                                        <i class="bi bi-envelope me-1"></i>
                                                        <?php echo $email; ?>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <a href="<?php echo site_url('users/do_logout'); ?>"
                                            class="btn btn-light-danger btn-sm">
                                            <i class="bi bi-box-arrow-right me-2"></i>
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="text-center text-gray-600 fs-7">
                            © <?php echo date('Y'); ?> PT SOCFIN INDONESIA (SOCFINDO). All Rights Reserved.
                        </div>

                    </div>
                    <!--end::Wrapper-->

                </div>
                <!--end::Form-->

            </div>
            <!--end::Body-->

        </div>
        <!--end::Portal-->

    </div>
    <!--end::Root-->

    <!-- JavaScript -->
    <script src="<?php echo base_url('assets/plugins/global/plugins.bundle.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.bundle.js'); ?>"></script>

    <style>
        /* Card Portal Hover Effect */
        .card-portal {
            transition: all 0.3s ease;
            border-width: 2px !important;
        }

        .card-portal:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
        }

        .card-portal-link {
            text-decoration: none;
        }

        .card-portal-link:hover {
            text-decoration: none;
        }

        /* Symbol Animation */
        .symbol {
            transition: all 0.3s ease;
        }

        .card-portal:hover .symbol {
            transform: scale(1.1) rotate(5deg);
        }

        /* Badge Animation */
        .badge {
            transition: all 0.3s ease;
        }

        .card-portal:hover .badge {
            transform: scale(1.05);
        }

        /* Border Hover */
        .border-hover {
            border-color: transparent !important;
        }

        .card-portal:hover.border-hover {
            border-color: currentColor !important;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .w-lg-1000px {
                width: 100% !important;
            }

            .card-body {
                padding: 1.5rem !important;
            }
        }
    </style>

</body>

</html>