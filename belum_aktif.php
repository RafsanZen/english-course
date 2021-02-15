<?php
    if(!isset($_GET['halaman'])) {
        header('location: customer.php?halaman=sudah_aktif');
    } else if($row['status'] == 'Aktif') {
        header('location: customer.php?halaman=sudah_aktif');
    }
?>

<section class="py-6">
    <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot.png);background-position:left;background-size:auto;margin-top:105px;">
    </div>
    <!--/.bg-holder-->

    <div class="container position-relative">
        <div class="row align-items-center my-0">
            <div class="col-12">
                <div class="alert alert-danger mt-5">
                    Silahkan membeli paket yang tertera dibawah untuk mengakses layanan kami.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-top: -150px;">
    <b>Petunjuk Pembelian Paket</b>
    <ol>
        <li>Pilih jenis paket</li>
        <li>Klik pesan sekarang -> Klik Oke</li>
        <li>Kirim ke rekening BCA (12345678)</li>
        <li>Kirim bukti transfer via Whatsapp (089123123)</li>
        <li>Akun anda akan segera diaktifkan</li>
    </ol>
</section>

<!-- Pricing -->
<section>
    <div class="bg-holder" style="background-image:url(assets/img/illustrations/article-bg.png);background-position:right center;background-size:auto;">
    </div>
    <!--/.bg-holder-->

    <div class="container-lg">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot-2.png);background-position:left top;background-size:initial;margin-top:120px;margin-left:-35px;">
        </div>
        <!--/.bg-holder-->

        <div class="row flex-center" style="margin-top: -200px;">
            <div class="col-auto text-center">
                <h2 class="fw-bold">Harga</h2>
                <hr class="mx-auto text-dark" style="height:2px;width:50px" />
            </div>
        </div>
        
        <div class="row h-100 justify-content-center">
            <section class="price-sec">
                <div class="container-fluid">
                    <div class="container">
                    
                        <form method="POST" class="row">
                            <div class="col-sm-4 price-table">
                                <div class="card text-center">
                                    <div class="title">
                                        <i class="fa fa-paper-plane"></i>
                                        <h2>Basic</h2>
                                    </div>
                                    <div class="price my-3">
                                        <h2 class="text-white"><sup>Rp. </sup>10.000</h2>
                                    </div>

                                    <div class="option">
                                        <ul>
                                            <li><h5 class="fw-bold text-white">1 Bulan</h5></li>
                                            <li><i class="fa fa-check"></i> 1 Akun Bersama</li>
                                            <li><i class="fa fa-check"></i> Akses Video Full SD SMP SMA</li>
                                            <li><i class="fa fa-check"></i> Kualitas Video</li>
                                            <li><i class="fa fa-close"></i> TIdak ada potongan harga</li>
                                        </ul>
                                        <button class="btn btn-light rounded-pill mt-3" onclick="return confirm('Anda yakin membeli paket Basic ?')" name="basic">Pesan Sekarang</button>
                                    </div>
                                </div>
                            </div>

                            <!-- (1) ===================================-->
                            <div class="col-sm-4 price-table">
                                <div class="card text-center">
                                    <div class="title">
                                        <i class="fa fa-plane"></i>
                                        <h2>Standard</h2>
                                    </div>
                                    <div class="price my-3">
                                        <h2 class="text-white"><sup>Rp. </sup>50.000</h2>
                                    </div>

                                    <div class="option">
                                        <ul>
                                            <li><h5 class="fw-bold text-white">6 Bulan</h5></li>
                                            <li><i class="fa fa-check"></i> 1 Akun Bersama</li>
                                            <li><i class="fa fa-check"></i> Akses Video Full SD SMP SMA</li>
                                            <li><i class="fa fa-check"></i> Kualitas Video</li>
                                            <li><i class="fa fa-check"></i> Hemat Rp. 10.000</li>
                                        </ul>
                                        <button class="btn btn-light rounded-pill mt-3" onclick="return confirm('Anda yakin membeli paket Standard ?')" name="standard">Pesan Sekarang</button>
                                    </div>
                                </div>
                            </div>

                            <!-- (2) ===================================-->
                            <div class="col-sm-4 price-table">
                                <div class="card text-center">
                                    <div class="title">
                                        <i class="fa fa-rocket"></i>
                                        <h2>Premium</h2>
                                    </div>
                                    <div class="price my-3">
                                        <h2 class="text-white"><sup>Rp. </sup>100.000</h2>
                                    </div>

                                    <div class="option">
                                        <ul>
                                            <li><h5 class="fw-bold text-white">1 Tahun</h5></li>
                                            <li><i class="fa fa-check"></i> 1 Akun Bersama</li>
                                            <li><i class="fa fa-check"></i> Akses Video Full SD SMP SMA</li>
                                            <li><i class="fa fa-check"></i> Kualitas Video</li>
                                            <li><i class="fa fa-check"></i> Hemat Rp. 20.000</li>
                                        </ul>
                                        <button class="btn btn-light rounded-pill mt-3" onclick="return confirm('Anda yakin membeli paket Premium ?')" name="premium">Pesan Sekarang</button>
                                    </div>
                                </div>
                            </div>
                            <!-- (3) ===================================-->
                        </form>
                    
                    </div>
                </div>
            </section>          
        </div>
    </div>
</section>
<!-- End of Pricing -->

<?php 
    if(isset($_POST['basic'])) {
        $customer_id = $row['id'];
        $jenis_paket_id = 12;

        $conn->query("INSERT INTO transaksi (customer_id, jenis_paket_id) VALUES ('$customer_id', '$jenis_paket_id')");

        echo "<script>alert('Paket sudah dipesan !')</script>";
        echo "<script>location='customer.php'</script>";

    }

    if(isset($_POST['standard'])) {
        $customer_id = $row['id'];
        $jenis_paket_id = 13;

        $conn->query("INSERT INTO transaksi (customer_id, jenis_paket_id) VALUES ('$customer_id', '$jenis_paket_id')");

        echo "<script>alert('Paket sudah dipesan !')</script>";
        echo "<script>location='customer.php'</script>";

    }

    if(isset($_POST['premium'])) {
        $customer_id = $row['id'];
        $jenis_paket_id = 14;

        $conn->query("INSERT INTO transaksi (customer_id, jenis_paket_id) VALUES ('$customer_id', '$jenis_paket_id')");

        echo "<script>alert('Paket sudah dipesan !')</script>";
        echo "<script>location='customer.php'</script>";

    }

?>