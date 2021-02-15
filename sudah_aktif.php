<?php
    if(!isset($_GET['halaman'])) {
        header('location: customer.php?halaman=belum_aktif');
    } else if($row['status'] == 'Belum Aktif') {
        header('location: customer.php?halaman=belum_aktif');
    }
?>

<section class="py-6">
    <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot.png);background-position:left;background-size:auto;margin-top:105px;">
    </div>
    <!--/.bg-holder-->

    <div class="container mt-5">
        <h3>Pilih Pendidikan</h3>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-danger p-1 rounded-2">
                        <img src="assets/img/illustrations/school.png" alt="" class="w-100 rounded-2">
                        <div class="p-3">
                            <h4 class="text-white mt-3">SD</h4>
                            <p class="text-white">Pembelajaran Bahasa Inggris untuk anak Sekolah Dasar(SD)</p>
                            <a href="customer.php?halaman=sd" class="btn p-0">Akses Kelas</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-primary p-1 rounded-2">
                        <img src="assets/img/illustrations/school.png" alt="" class="w-100 rounded-2">
                        <div class="p-3">
                            <h4 class="text-white mt-3">SMP</h4>
                            <p class="text-white">Pembelajaran Bahasa Inggris untuk anak Sekolah Menengah Pertama(SMP)</p>
                            <a href="customer.php?halaman=smp" class="btn p-0">Akses Kelas</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-secondary p-1 rounded-2">
                        <img src="assets/img/illustrations/school.png" alt="" class="w-100 rounded-2">
                        <div class="p-3">
                            <h4 class="text-white mt-3">SMA</h4>
                            <p class="text-white">Pembelajaran Bahasa Inggris untuk anak Sekolah Menengah Atas(SMA)</p>
                            <a href="customer.php?halaman=sma" class="btn p-0">Akses Kelas</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>