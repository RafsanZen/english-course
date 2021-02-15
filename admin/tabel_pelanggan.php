<?php 
    $sql = "SELECT * FROM customers";
    $result = $conn->query($sql);
?>

<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Gabung</th>
                        <th>Status Berlangganan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($result->num_rows > 0) { ?>
                        <?php $no = 1; ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['nama_lengkap'] ?></td>
                            <td><?= date('d M Y', strtotime($row['created_at'])) ?></td>
                            <td><?= $row['status']?></td>
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