<?php
    if(!isset($_GET['halaman'])) {
        header('location: customer.php');
    } else if(isset($_GET['halaman']) && $row['status'] == 'Belum Aktif') {
        header('location: customer.php');
    }

    $sql_video = "SELECT video.url, video.deskripsi, pendidikan.pendidikan 
                    FROM video 
                    INNER JOIN pendidikan ON video.pendidikan_id = pendidikan.id
                    WHERE pendidikan.pendidikan = 'SMP'
                    ORDER BY video.created_at DESC";
    $result_video = $conn->query($sql_video);
?>

<section class="py-6">
    <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot.png);background-position:left;background-size:auto;margin-top:105px;">
    </div>
    <!--/.bg-holder-->

    <div class="container mt-5">
        <h4>Pembelajaran Bahasa Inggris Untuk Sekolah Menengah Pertama (SMP)</h4>
        <iframe src="<?= $_GET['url'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-100 mt-3" height="500px"></iframe>
        <div class="col-4 mt-3">
            <h5>Playlist</h5>
            <ul class="list-group mt-3">
                <?php if($result_video->num_rows > 0) { ?>
                    <?php while($row = $result_video->fetch_assoc()) { ?>
                        <a href="customer.php?halaman=smp&url=<?= $row['url'] ?>" class="text-dark"><li class="list-group-item"><?= $row['deskripsi'] ?></li></a>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
        
    </div>

</section>