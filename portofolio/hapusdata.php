<?php
$koneksi = new mysqli("localhost","root","","portofolio")
?>


<?php
        $ambil = $koneksi->query("SELECT * FROM kontak WHERE id='$_GET[id]'");

        $koneksi->query("DELETE FROM kontak WHERE id='$_GET[id]'");

        echo "<script>location='tampildata.php?halaman=tampildata.php';</script>";
    ?>