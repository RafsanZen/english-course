<?php
    $conn->query("DELETE FROM video WHERE id='$_GET[id]'");

    echo "<script>location='index.php?halaman=video'</script>";
?>