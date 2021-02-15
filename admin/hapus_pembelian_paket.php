<?php
    $conn->query("DELETE FROM transaksi WHERE id='$_GET[id]'");

    echo "<script>location='index.php?halaman=pembelian_paket'</script>";
?>