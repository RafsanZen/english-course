<?php 
    $sql = "SELECT video.id, video.url, video.deskripsi, pendidikan.pendidikan
            FROM video
            INNER JOIN pendidikan ON video.pendidikan_id = pendidikan.id
            ORDER BY created_at DESC";
    $result = $conn->query($sql);
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Video</h6>
            <a href="index.php?halaman=tambah_video" class="btn btn-sm btn-primary">Tambah Video</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pendidikan</th>
                        <th>Deskripsi</th>
                        <th>url</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($result->num_rows > 0) { ?>
                        <?php $no = 1; ?>
                        <?php while($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['pendidikan'] ?></td>
                                <td><?= $row['deskripsi'] ?></td>
                                <td><a href="<?= $row['url'] ?>" target=_blank><?= $row['url'] ?></a></td>
                                <td>
                                    <a href="index.php?halaman=edit_video&id=<?= $row['id'] ?>" class="btn btn-sm btn-warning"><span class="fa fa-pencil-square-o"></span></a>
                                    <a href="index.php?halaman=hapus_video&id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menghapus data ini ?')"><span class="fa fa-trash-o"></span></a>
                                </td>
                            </tr>
                        <?php $no++; ?>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>