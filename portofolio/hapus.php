<?php
$koneksi = new mysqli("localhost","root","","portofolio")
?>


<?php
        $ambil = $koneksi->query("SELECT * FROM gallery WHERE id='$_GET[id]'");
        $pecah = $ambil->fetch_assoc();
        $fotoproduk = $pecah['foto'];
        if (file_exists("../portofolio/img/$fotoproduk")) 
    {
        unlink("../portofolio/img/$fotoproduk");
    }

        $koneksi->query("DELETE FROM gallery WHERE id='$_GET[id]'");

        echo "<script>location='editgallery.php?halaman=editgallery.php';</script>";
    ?>