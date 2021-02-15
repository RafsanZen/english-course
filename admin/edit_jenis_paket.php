<?php 
    $sql = "SELECT * FROM pendidikan";
    $result = $conn->query($sql);

    $sql2 = $conn->query("SELECT * FROM jenis_paket WHERE id='$_GET[id]'");
    $row = $sql2->fetch_assoc();
?>
<!-- Tambah Jenis Paket -->
<div class="card shadow mb-4 col-6">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Jenis Paket</h6>
    </div>
    <div class="card-body">
        <form method="POST" class="needs-validation" novalidate>
            <div class="mb-3 row">
                <label for="namaPaket" class="col-sm-4 col-form-label">Nama Paket</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="namaPaket" name="nama_paket" value="<?= $row['nama_paket'] ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="limitPaket" class="col-sm-4 col-form-label">Limit Paket (Hari)</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="limitPaket" name="limit_paket" min=1 value="<?= $row['limit_paket'] ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga" class="col-sm-4 col-form-label">Harga (Rp)</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="harga" min=1000 name="harga" value="<?= $row['harga'] ?>" required>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="submit" name="edit">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php 
    if(isset($_POST['edit'])) {
        $conn->query("UPDATE jenis_paket SET nama_paket='$_POST[nama_paket]', limit_paket='$_POST[limit_paket]', harga='$_POST[harga]' WHERE id= '$_GET[id]' ");

        echo "<script>alert('Jenis Paket berhasil diubah')</script>";
        echo "<script>location='index.php?halaman=jenis_paket'</script>";

    }
?>