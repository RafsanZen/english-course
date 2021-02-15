<?php 
    // Menghitung Total Pelanggan
    $count_pelanggan = "SELECT COUNT(*) AS total FROM customers";
    $result_pelanggan = $conn->query($count_pelanggan);
    $total_pelanggan = mysqli_fetch_assoc($result_pelanggan);

    // Menghitung Total Jenis Paket
    $count_jenis_paket = "SELECT COUNT(*) AS total FROM jenis_paket";
    $result_jenis_paket = $conn->query($count_jenis_paket);
    $total_jenis_paket = mysqli_fetch_assoc($result_jenis_paket);

    // Menghitung Total Pembelian
    $count_transaksi = "SELECT COUNT(*) AS total FROM transaksi";
    $result_transaksi = $conn->query($count_transaksi);
    $total_transaksi = mysqli_fetch_assoc($result_transaksi);

    // Menghitung Total Video
    $count_video = "SELECT COUNT(*) AS total FROM video";
    $result_video = $conn->query($count_video);
    $total_video = mysqli_fetch_assoc($result_video);
?>

<!-- Pelanggan -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Total Data</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Total Pelanggan -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="index.php?halaman=pelanggan" class="text-decoration-none">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Pelanggan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pelanggan['total'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <!-- Total Jenis Paket -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="index.php?halaman=jenis_paket" class="text-decoration-none">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Jenis Paket</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_jenis_paket['total'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <!-- Total Pembelian Paket -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="index.php?halaman=pembelian_paket" class="text-decoration-none">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Pembelian Paket</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_transaksi['total'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <!-- Total Video -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="index.php?halaman=video" class="text-decoration-none">
        <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Total Video</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_video['total'] ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-video-camera fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

</div>