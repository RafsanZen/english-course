<?php 
    $sql = "SELECT *
            FROM jenis_paket 
            ORDER BY created_at DESC";
    $result = $conn->query($sql);
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Jenis Paket</h6>
            <a href="index.php?halaman=tambah_jenis_paket" class="btn btn-sm btn-primary">Tambah Jenis Paket</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Limit Paket</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) { ?>
                        <?php $no = 1; ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $no; ?></td>
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
                            <td>Rp. <?= number_format($row['harga']) ?></td>
                            <td>
                                <a href="index.php?halaman=edit_jenis_paket&id=<?= $row['id'] ?>" class="btn btn-sm btn-warning"><span class="fa fa-pencil-square-o"></span></a>
                                <a href="index.php?halaman=hapus_jenis_paket&id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menghapus data ini ?')"><span class="fa fa-trash-o"></span></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        <?php } ?>
                    <?php } ?>
                    <?php $conn->close(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>