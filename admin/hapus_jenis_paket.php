<?php
    $conn->query("DELETE FROM jenis_paket WHERE id='$_GET[id]'");

    echo "<script>location='index.php?halaman=jenis_paket'</script>";
?>