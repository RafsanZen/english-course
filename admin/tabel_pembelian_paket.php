<?php 
    $sql = "SELECT transaksi.tanggal_kadaluarsa, transaksi.created_at AS tanggal_pemesanan, customers.nama_lengkap, jenis_paket.nama_paket, jenis_paket.limit_paket, customers.status, transaksi.customer_id, transaksi.id
            FROM ((transaksi
            INNER JOIN customers ON transaksi.customer_id = customers.id)
            INNER JOIN jenis_paket ON transaksi.jenis_paket_id = jenis_paket.id)
            ORDER BY transaksi.created_at DESC";

    $result = $conn->query($sql);
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pembelian Paket</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Paket</th>
                        <th>Limit Paket</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($result->num_rows > 0) { ?>
                        <?php $no = 1; ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row['nama_lengkap'] ?></td>
                            <td><?= $row['nama_paket'] ?></td>
                            <?php 
                                $convert = $row['limit_paket'];
                                $tampil = '';

                                $years = ($convert / 365) ;
                                $years = floor($years);

                                $month = ($convert % 365) / 30;
                                $month = floor($month);

                                if($years == 0) {
                                    $tampil = $month.' Bulan';
                                } else if($years >= 1 && $month == 0) {
                                    $tampil = $years.' Tahun';
                                } else {
                                    $tampil = $years.' Tahun '.$month.' Bulan';
                                }
                            ?>
                            <td><?= $tampil ?></td>
                            <td>
                                <?php
                                    if($row['status'] == 'Belum Aktif') {
                                        echo $row['status'];
                                    } else if($row['status'] == 'Aktif' && $row['tanggal_kadaluarsa'] > date("Y-m-d H:i:s")) {
                                        echo $row['tanggal_kadaluarsa'];
                                    } else if($row['status'] == 'Aktif' && $row['tanggal_kadaluarsa'] < date("Y-m-d H:i:s")) {
                                        echo 'Sudah Kadaluarsa';
                                    }
                                ?>
                            </td>
                            <td><?= $row['tanggal_pemesanan'] ?></td>

                            <form method="POST">
                                <input type="hidden" name="customer_id" value="<?= $row['customer_id'] ?>">
                                <input type="hidden" name="limit_paket" value="<?= $row['limit_paket'] ?>">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <?php if($row['status'] == 'Belum Aktif') { ?>
                                    <td>
                                        <button class="btn btn-sm btn-success" onclick="return confirm('Anda yakin mengaktifkan data ini ?')" name="aktif">Aktifkan</button>
                                        <a href="index.php?halaman=hapus_pembelian_paket&id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menghapus data ini ?')"><span class="fa fa-trash-o"></span></a>  
                                    </td>
                                <?php } else if($row['status'] == 'Aktif' && $row['tanggal_kadaluarsa'] > date("Y-m-d H:i:s")) { ?>
                                    <td>
                                        Akun sudah aktif
                                    </td>
                                <?php } else if($row['status'] == 'Aktif' && $row['tanggal_kadaluarsa'] < date("Y-m-d H:i:s")) { ?>
                                    <td>
                                        <button class="btn btn-sm btn-warning" onclick="return confirm('Anda yakin menonaktifkan data ini ?')" name="non_aktif">Non-aktifkan</button>
                                    </td>    
                                <?php } ?>

                            </form>

                        </tr>
                        <?php $no++; ?>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 
    if(isset($_POST['aktif'])) {
        $customer_id = $_POST['customer_id'];
        $limit_paket = $_POST['limit_paket'];
        $id = $_POST['id'];

        $conn->query("UPDATE customers SET status = 'Aktif' WHERE id='$customer_id'");

        $conn->query("UPDATE transaksi SET tanggal_kadaluarsa = ADDDATE(NOW(), '$limit_paket') WHERE id='$id'");

        echo "<script>alert('Paket telah diaktifkan')</script>";
        echo "<script>location='index.php?halaman=pembelian_paket'</script>";

    }

    if(isset($_POST['non_aktif'])) {
        $customer_id = $_POST['customer_id'];
        $limit_paket = $_POST['limit_paket'];
        $id = $_POST['id'];

        $conn->query("UPDATE customers SET status = 'Belum Aktif' WHERE id='$customer_id'");

        $conn->query("DELETE FROM transaksi WHERE id='$id'");


        echo "<script>alert('Akun telah di non-aktifkan')</script>";
        echo "<script>location='index.php?halaman=pembelian_paket'</script>";

    }
?>